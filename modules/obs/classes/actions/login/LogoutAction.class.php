<?php

namespace obs\actions\login {

    use admin\managers\ObserverManager;
    use NGS;
    use ngs\framework\AbstractAction;
    use obs\security\RequestGroups;

    /**
     * @author Vahagn Kirakosyan
     */
    class LogoutAction extends AbstractAction {

        public function service() {
            ObserverManager::getInstance()->updateField(NGS()->getSessionManager()->getUserID(), 'hash', '');
            NGS()->getSessionManager()->logout();
            $this->redirect('login');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
