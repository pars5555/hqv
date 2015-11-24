<?php

namespace admin\actions\observer {

    use admin\managers\ObserverManager;
    use admin\security\RequestGroups;
    use NGS;
    use ngs\framework\AbstractAction;
    use stdClass;

    class AddAction extends AbstractAction {

        public function service() {
            $observerDto = ObserverManager::getInstance()->getByHash(NGS()->args()->getHash());
            if (!$observerDto) {
                $ret = new stdClass();
                $ret->status = 'error';
                $ret->message = 'Wrong hash!';
                echo json_encode($ret);
                exit;
            }
            $ret = new stdClass();
                $ret->status = 'ok';
               
                echo json_encode($ret);
                exit;
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
