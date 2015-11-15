<?php

namespace admin\actions {

    use admin\managers\AdminManager;
    use admin\security\RequestGroups;
    use admin\security\UserGroups;
    use NGS;
    use ngs\framework\AbstractAction;

    class LoginAction extends AbstractAction {

        public function service() {
            $adminDto = AdminManager::getInstance()->getByUsernamePassword(NGS()->args()->getUsername(), NGS()->args()->getPassword());
            if (!$adminDto) {
                $this->redirect('login');
            }
            NGS()->getSessionManager()->login(UserGroups::$ADMIN, $adminDto->getId());
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
