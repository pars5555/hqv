<?php

namespace hqv\actions {

    use hqv\managers\SettingManager;
    use hqv\security\RequestGroups;
    use ngs\framework\AbstractAction;

    abstract class BaseAction extends AbstractAction {

        public function __construct() {
            
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

        protected function redirectToReferer() {
            header("location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }

        public function getSetting($varName) {
            return SettingManager::getInstance()->getSetting($varName);
        }

    }

}
