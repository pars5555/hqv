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

    use admin\security\RequestGroups;

    abstract class GuestLoad extends BaseLoad {

        public function load() {
            
        }

        

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
