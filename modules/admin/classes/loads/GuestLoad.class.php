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

    use ngs\framework\AbstractLoad;
    use admin\security\RequestGroups;

    abstract class GuestLoad extends AbstractLoad {

        public function load() {
        }

        public function getDefaultLoads() {
            $loads = array();
            return $loads;
        }

        public function isValidLoad($namespace, $load) {
            return true;
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
