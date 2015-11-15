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
namespace ngsadmin\loads {

use bclub\security\RequestGroups;
use ngs\framework\AbstractLoad;
    
abstract class GuestLoad extends AbstractLoad{

    public function load() {
    }

    public function getDefaultLoads() {
        $loads = array();
        return $loads;
    }

    protected function initErrorMessages() {
        if (!empty($_SESSION['error_message'])) {
            $reror_message = $this->secure($_SESSION['error_message']);
            $this->addParam('error_message', $reror_message);
            unset($_SESSION['error_message']);
        }
    }

    public function isValidLoad($namespace, $load) {
        return true;
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }


}
}
