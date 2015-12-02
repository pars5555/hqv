<?php

namespace obs\actions\login {

    use admin\managers\ObserverManager;
    use NGS;
    use ngs\framework\AbstractAction;
    use obs\security\RequestGroups;
    use obs\security\UserGroups;

    class LoginAction extends AbstractAction {

        public function service() {
            $observerDto = ObserverManager::getInstance()->getByUsernamePassword(NGS()->args()->getUsername(), NGS()->args()->getPassword());
            if (!$observerDto) {
                $_SESSION['error_message'] = "Wrong login/password";
                $this->redirect('login');
            }
            NGS()->getSessionManager()->login(UserGroups::$OBSERVER, $observerDto->getId());
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
