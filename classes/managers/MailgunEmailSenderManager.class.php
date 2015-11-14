<?php

/**
 * UserManager class is responsible for creating,
 *
 * @author Vahagn Sookiasian
 * @package managers
 * @version 1.0
 */

namespace hqv\managers {
    require_once (NGS()->getClassesDir() . '/lib/mailgun-php-master/vendor/autoload.php');

    use Mailgun\Mailgun;

    class MailgunEmailSenderManager {

        /**
         * @var singleton instance of class
         */
        private static $instance = null;
        private $mailgun;
        private $domain;
        private $maxRecipientsPerEmail;

        /**
         * Initializes DB mappers

         * @return
         */
        function __construct() {
            $this->mailgun = new Mailgun('key-2c26be6dca0adcf22ddad766596145e7');
            $this->domain = 'sandboxdd16d2f69de64c3b9c08433764ca1661.mailgun.org';
            $this->maxRecipientsPerEmail = intval(500);
            if ($this->maxRecipientsPerEmail <= 10) {
                $this->maxRecipientsPerEmail = 500;
            }
        }

        /**
         * Returns an singleton instance of this class
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new MailgunEmailSenderManager();
            }
            return self::$instance;
        }

        public function sendHtmlEmail($to, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles = null) {
            if (empty($to)) {
                return "Empty Recipients list!";
            }
            if (!is_array($to)) {
                $to = array($to);
            }
            if (ENVIRONMENT !== 'production' && count($to) > 3) {
                return true;
            }


            $toArrays = array_chunk($to, $this->maxRecipientsPerEmail);
            $ret = array();
            foreach ($toArrays as $toAddressesArray) {
                $params = $this->getEmailParams($toAddressesArray, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles);
                try {
                    $res = $this->mailgun->sendMessage($this->domain, $params[0], $params[1]);
                    $ret[] = $res->http_response_code == 200;
                } catch (Exception $ex) {
                    $ret[] = $ex->getMessage();
                }
                $ret[] = 'Unknown Error!';
            }
            return $ret;
        }
        
        public function sendSingleHtmlEmail($to, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles = null) {
           
           
                $params = $this->getSingleEmailParams($to, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles);
                try {
                    $res = $this->mailgun->sendMessage($this->domain, $params[0], $params[1]);
                    $ret[] = $res->http_response_code == 200;
                } catch (Exception $ex) {
                    $ret[] = $ex->getMessage();
                }
                $ret[] = 'Unknown Error!';
         
            return $ret;
        }

        private function getSingleEmailParams($to, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles = null) {
            $result = array(
                'from' => $fromName . " <" . $fromEmail . ">",
                'to' => $to,               
                'subject' => $subject,
                'html' => $bodyHtml,
                'text' => strip_tags($bodyHtml)
            );
            return [$result, []];
        }
        private function getEmailParams($to, $subject, $bodyHtml, $fromEmail, $fromName, $attachedFiles = null) {
            $result[0] = array(
                'from' => $fromName . " <" . $fromEmail . ">",
                'to' => $fromEmail,
                'bcc' => implode(',', $to),
                'subject' => $subject,
                'html' => $bodyHtml,
                'text' => strip_tags($bodyHtml)
            );

            $result[1] = array();
            $result[1]['attachment'] = array();
            if (!empty($attachedFiles)) {
                foreach ($attachedFiles as $fileDisplayName => $file) {
                    $result[1]['attachment'][] = array('filePath' => $file, 'remoteName' => $fileDisplayName);
                }
            }

            return $result;
        }
      

    }

}
