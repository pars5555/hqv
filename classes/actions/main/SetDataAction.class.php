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

    class SetDataAction extends BaseAction {

        public function service() {
            list($voterId, $email, $phone, $willVote, $ipAddress, $country, $browser, $wantsReceiveEmail ) = $this->validateData();
            \hqv\managers\VoterDataManager::getInstance()->addRow($voterId, $email, $phone, $willVote, $ipAddress, $country, $browser, $wantsReceiveEmail);
            if (!empty($email)) {
                $mailgunManager = \hqv\managers\MailgunEmailSenderManager::getInstance();
                $mailgunManager->sendSingleHtmlEmail('pars5555@yahoo.com', 'Hi!!!', "<div style='color:red'>Barev Բարեվ</div>", 'hanraqve@gmail.com', 'Հանրաքվե');
            }
        }

    }

}
