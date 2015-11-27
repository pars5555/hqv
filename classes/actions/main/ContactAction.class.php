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
    use hqv\managers\MailgunEmailSenderManager;

    class ContactAction extends BaseAction {

        public function service() {
            $email = $_REQUEST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error_message'] = "Invalid email address!";
                $this->redirect('contact');
            }
            $mailgunManager = MailgunEmailSenderManager::getInstance();
            $name = $_REQUEST['first_name'] . ' ' . $_REQUEST['last_name'];
            $body = trim($_REQUEST['body']);
            if (empty($body)) {
                $_SESSION['error_message'] = "Please input your letter!";
                $this->redirect('contact');
            }
            $sendSingleHtmlEmail = $mailgunManager->sendSingleHtmlEmail('hanraqve@gmail.com', "Contact from" . $name, $_REQUEST['body'], $email, $name);
            if ($sendSingleHtmlEmail === true) {
                $_SESSION['success_message'] = "You email successfuly sent to us. Thank you";
            } else {
                $_SESSION['error_message'] = $sendSingleHtmlEmail;
            }

            $this->redirect('contact');
        }

    }

}
