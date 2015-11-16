<?php

/**
 *
 * NGS admin login
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.loads
 * @version 1.0.0
 *
 */

namespace admin\loads {

    use hqv\security\RequestGroups;
    use NGS;
    use ngs\framework\AbstractLoad;

    class LoginLoad extends AbstractLoad {

        public function load() {
            if (NGS()->getSessionManager()->getUser()->getLevel() == \admin\security\UserGroups::$ADMIN)
            {
                $this->redirect('');
            }
            
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/login.tpl";
        }

    }

}
