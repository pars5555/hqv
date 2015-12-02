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

namespace obs\loads {

    use obs\security\UserGroups;
    use NGS;

    class LoginLoad extends BaseLoad {

        public function load() {
            $userType = NGS()->getSessionManager()->getUserType();
            if (isset($userType) && $userType == UserGroups::$OBSERVER) {
                $this->redirect('');
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/login.tpl";
        }

    }

}
