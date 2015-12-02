<?php

namespace obs\actions\login {

    use NGS;
    use ngs\framework\AbstractAction;
    use obs\security\RequestGroups;

    /**
     * @author Vahagn Kirakosyan
     */
    class LogoutAction extends AbstractAction {

        public function service() {
            NGS()->getSessionManager()->logout();
            $this->redirect('login');
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
