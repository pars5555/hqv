<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SendchatLoad
 *
 * @author Administrator
 */

namespace obs\loads {

    use hqv\managers\SettingManager;
    use hqv\security\RequestGroups;
    use ngs\framework\AbstractLoad;

    abstract class BaseLoad extends AbstractLoad {

        public function initialize() {
            parent::initialize();
        }

        public function getDefaultLoads() {
            $loads = array();
            return $loads;
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

        public function isValidLoad($namespace, $load) {
            return true;
        }

        public function getSetting($varName) {
            return SettingManager::getInstance()->getSetting($varName);
        }

    }

}