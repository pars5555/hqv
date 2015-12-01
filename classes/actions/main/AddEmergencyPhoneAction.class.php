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
    use hqv\managers\EmergencyPhoneNumberManager;
    use hqv\managers\VoterDataManager;
    use NGS;

    class AddEmergencyPhoneAction extends BaseAction {

        public function service() {
            $phoneNumber = NGS()->args()->getPhoneNumber();
            $captchaCode = NGS()->args()->getCaptchaCode();
            if (!isset($_SESSION['captcha_code']) || $captchaCode !== $_SESSION['captcha_code']) {
                require_once NGS()->getClassesDir('ngs') . "/lib/captcha/simple-php-captcha.php";
                list($code, $base64Png) = generateCaptcha();
                $_SESSION['captcha_code'] = $code;
                $this->addParam('captcha', 'data:image/png;base64,' . $base64Png);
                $this->addParam('status', 'error');
                return;
            }
            $rows = VoterDataManager::getInstance()->selectByField('ip_address', $_SERVER['REMOTE_ADDR']);
            if (!empty($rows)) {
                VoterDataManager::getInstance()->updateField($rows[0]->getId(), 'ip_address', $rows[0]->getIpAddress() . '_');
            }
            EmergencyPhoneNumberManager::getInstance()->addRow($phoneNumber);
        }

    }

}
