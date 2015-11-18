<?php

namespace admin\actions\login {

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
            if ($adminDto->getType() == 'admin'){
            NGS()->getSessionManager()->login(UserGroups::$ADMIN, $adminDto->getId());
            }elseif ($adminDto->getType() == 'moderator')
            {
            NGS()->getSessionManager()->login(UserGroups::$MODERATOR, $adminDto->getId());
                
            }
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
