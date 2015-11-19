<?php

/**
 * main site load for all ngs site's loads
 * this class provide methods
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2015
 * @package loads
 * @version 6.0
 *
 */

namespace hqv\loads {

use hqv\managers\SettingManager;
use hqv\managers\TranslationManager;
use hqv\security\RequestGroups;
use NGS;
use ngs\framework\AbstractLoad;

    abstract class NgsLoad extends AbstractLoad {

        /**
         * Initializes translations array for selected language.
         *
         * @return
         */
        public function __construct() {
            
        }

        //! A constructor.
        public function initialize() {
            parent::initialize();
            $lm = TranslationManager::getInstance();
            $this->addParam("lm", $lm);
            $this->addParam("loadName", NGS()->getRoutesEngine()->getPackage());
        }

        protected function initErrorMessages() {
            if (isset($_SESSION['error_message'])) {
                $this->addParam('error_message', $_SESSION['error_message']);
                unset($_SESSION['error_message']);
            }
        }

        protected function initSuccessMessages() {
            if (isset($_SESSION['success_message'])) {
                $this->addParam('success_message', $_SESSION['success_message']);
                unset($_SESSION['success_message']);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

        public function getSetting($varName) {
            return SettingManager::getInstance()->getSetting($varName);
        }

    }

}
