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
                $ret->message = 'Wrong login/password!';
                echo json_encode($ret);
                exit;
            }
           
		$ret = new stdClass();
                $ret->status = 'ok';
                $ret->hash = $observerDto ->getHash();
                echo json_encode($ret);
                exit;

        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
