<?php

namespace admin\actions\observer {

    use admin\managers\ObserverManager;
    use admin\security\RequestGroups;
    use admin\security\UserGroups;
    use NGS;
    use ngs\framework\AbstractAction;
    use stdClass;

    class LoginAction extends AbstractAction {

        public function service() {
            $observerDto = ObserverManager::getInstance()->getByUsernamePassword(NGS()->args()->getUsername(), NGS()->args()->getPassword());
            if (!$observerDto) {
                $ret = new stdClass();
                $ret->status = 'error';
                $ret->message = 'Wrong login/pass!';
                echo json_encode($ret);
                exit;
            }
            NGS()->getSessionManager()->login(UserGroups::$OBSERVER, $observerDto->getId());
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
