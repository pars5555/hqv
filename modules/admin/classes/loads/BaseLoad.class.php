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

namespace admin\loads {

    use admin\security\UserGroups;
    use hqv\security\RequestGroups;
    use NGS;
    use ngs\framework\AbstractLoad;

    abstract class BaseLoad extends AbstractLoad {

        public function initialize() {
            parent::initialize();
            $this->addParam('userId', NGS()->getSessionManager()->getUserId());
            $this->addParam('userType', NGS()->getSessionManager()->getUserType());
            $this->addParam('userTypeModerator', UserGroups::$MODERATOR);
            $this->addParam('userTypeAdmin', UserGroups::$ADMIN);
            $this->addParam('userTypeGuest', UserGroups::$GUEST);
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

    }

}