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
    use ngsadmin\loads\GuestLoad;

    abstract class BaseAdminLoad extends GuestLoad {

        public function onNoAccess($msg = "") {
            $this->redirect('login');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
//to do     
        }

        public function initPaging($page, $itemsCount, $limit, $pagesShowed) {
            if ($limit < 1) {
                return false;
            }
            $pageCount = ceil($itemsCount / $limit);
            $centredPage = ceil($pagesShowed / 2);
            $pStart = 0;
            if (($page - $centredPage) > 0) {
                $pStart = $page - $centredPage;
            }
            if (($page + $centredPage) >= $pageCount) {
                $pEnd = $pageCount;
                if (($pStart - ($page + $centredPage - $pageCount)) > 0) {
                    $pStart = $pStart - ($page + $centredPage - $pageCount) + 1;
                }
            } else {
                $pEnd = $pStart + $pagesShowed;
            }
            $this->addParam("pageCount", $pageCount);
            $this->addParam("page", $page);
            $this->addParam("pStart", $pStart);
            $this->addParam("pEnd", $pEnd);
            $this->addParam("limit", $limit);
            $this->addParam("itemsCount", $itemsCount);
            $this->addParam('itemsPerPageOptions', array(10, 25, 50, 100));
            return $pageCount;
        }

    }

}