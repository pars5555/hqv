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
    use NGS;

    class AddEmergencyPhoneAction extends BaseAction {

        public function service() {
            $phoneNumber = NGS()->args()->getPhoneNumber();
            \hqv\managers\EmergencyPhoneNumberManager::getInstance()->addRow($phoneNumber);
        }

    }

}
