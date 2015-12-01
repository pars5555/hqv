<?php

/**
 * main site action for all ngs site's actions
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2014
 * @package actions.site
 * @version 6.0
 *
 */

namespace hqv\actions\main {

use hqv\actions\BaseAction;
use hqv\managers\TranslationManager;
use hqv\managers\VoterDataManager;
use hqv\managers\VoterManager;
use NGS;
use ngs\framework\templater\NgsTemplater;

    class SetDataAction extends BaseAction {

        public function service() {
            $validateData = $this->validateData();
            if ($validateData) {
                list($hash, $email, $phone, $will_vote, $will_be_in_arm, $is_death, $ip_address, $country, $browser, $version, $os) = $validateData;

                $rows = VoterDataManager::getInstance()->selectAdvance('*', ['ip_address', '=', "'$ip_address'"], ['datetime'], 'DESC');
                if (!empty($rows) && count($rows) > 5) {                    
                    $this->addParam('status', 'error');
                    $supportPhoneNumber = $this->getSetting('support_phone_number');
                    require_once NGS()->getClassesDir('ngs') . "/lib/captcha/simple-php-captcha.php";
                    list($code, $base64Png) = generateCaptcha();
                    $_SESSION['captcha_code']= $code;
                    $this->addParam('captcha', 'data:image/png;base64,'.$base64Png);
                    $this->addParam('message', 'Sorry, you tried to vote for many peaple, please call us on ' . $supportPhoneNumber, ' for support.');
                    return;
                }


                $voter = VoterManager::getInstance()->getByHash($hash);
                if (isset($voter)) {
                    $this->addParam('hash', $hash);
                    VoterDataManager::getInstance()->addRow($voter->getId(), $email, $phone, $will_vote, $will_be_in_arm, $is_death, $ip_address, $country, $browser, $version, $os);
                    /* if (!empty($email)) {
                      $mailgunManager = MailgunEmailSenderManager::getInstance();
                      $mailgunManager->sendSingleHtmlEmail('pars5555@yahoo.com', 'Hi!!!', $this->getEmailHtml(), 'hanraqve@gmail.com', 'Հանրաքվե');
                      } */
                }
            }
        }

        private function getEmailHtml() {
            $templetor = new NgsTemplater();
            $templetor->smartyInitialize();
            $templetor->getSmarty()->assign('lm', TranslationManager::getInstance());
            return $templetor->getSmarty()->fetch(NGS()->getTemplateDir() . "/main/email/thanks.tpl");
        }

        public function validateData() {
            if (!isset(NGS()->args()->hash)) {
                return false;
            }
            if (!isset(NGS()->args()->email)) {
                return false;
            }
            if (!isset(NGS()->args()->phone)) {
                return false;
            }
            if (!isset(NGS()->args()->will_vote)) {
                return false;
            }
            if (!isset(NGS()->args()->will_be_in_arm)) {
                return false;
            }
            if (!isset(NGS()->args()->is_death)) {
                return false;
            }
            $country = "";
            if (isset($_SERVER["GEOIP_COUNTRY_NAME"])) {
                $country = $_SERVER["GEOIP_COUNTRY_NAME"];
            }
            $clientSystemInfo = $this->getClientSystemInfo();
            $browser = $clientSystemInfo["name"];
            $version = $clientSystemInfo["version"];
            $os = $clientSystemInfo["platform"];
            return [NGS()->args()->hash, NGS()->args()->email, NGS()->args()->phone, NGS()->args()->will_vote, NGS()->args()->will_be_in_arm,NGS()->args()->is_death, $_SERVER['REMOTE_ADDR'], $country, $browser, $version, $os];
        }

        private function getClientSystemInfo() {

            $u_agent = $_SERVER['HTTP_USER_AGENT'];
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version = "";

            //First get the platform?
            if (preg_match('/linux/i', $u_agent)) {
                $platform = 'linux';
            } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                $platform = 'mac';
            } elseif (preg_match('/windows|win32/i', $u_agent)) {
                $platform = 'windows';
            }

            // Next get the name of the useragent yes seperately and for good reason
            if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                $bname = 'Internet Explorer';
                $ub = "MSIE";
            } elseif (preg_match('/Firefox/i', $u_agent)) {
                $bname = 'Mozilla Firefox';
                $ub = "Firefox";
            } elseif (preg_match('/Chrome/i', $u_agent)) {
                $bname = 'Google Chrome';
                $ub = "Chrome";
            } elseif (preg_match('/Safari/i', $u_agent)) {
                $bname = 'Apple Safari';
                $ub = "Safari";
            } elseif (preg_match('/Opera/i', $u_agent)) {
                $bname = 'Opera';
                $ub = "Opera";
            } elseif (preg_match('/Netscape/i', $u_agent)) {
                $bname = 'Netscape';
                $ub = "Netscape";
            }

            // finally get the correct version number
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            if (!preg_match_all($pattern, $u_agent, $matches)) {
                // we have no matching number just continue
            }

            // see how many we have
            $i = count($matches['browser']);
            if ($i != 1) {
                //we will have two since we are not using 'other' argument yet
                //see if version is before or after the name
                if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                    $version = $matches['version'][0];
                } else {
                    $version = $matches['version'][1];
                }
            } else {
                $version = $matches['version'][0];
            }

            // check if we have a number
            if ($version == null || $version == "") {
                $version = "?";
            }

            return array('userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern);
        }

    }

}
