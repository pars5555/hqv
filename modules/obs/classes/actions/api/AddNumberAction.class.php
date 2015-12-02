<?php

use ngs\framework\AbstractAction;
use obs\security\RequestGroups;

namespace obs\actions\api {

    class AddNumberAction extends AbstractAction {

        public function service() {
            $number = intval(NGS()->args()->getNumber());
            $hash = intval(NGS()->args()->getHash());
            $observerDtos = ObserverManager::getInstance()->selectByField($hash);
            if (!empty($observerDtos)) {
                $observerDto = $observerDtos[0];
                RealVoterNumberManager::getInstance()->addRow($number, 0, $observerDto->getAreaId());
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
