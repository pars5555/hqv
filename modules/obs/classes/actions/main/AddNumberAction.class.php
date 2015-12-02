<?php

namespace obs\actions\main {

use admin\managers\ObserverManager;
use admin\managers\RealVoterNumberManager;
use hqv\managers\VoterManager;
use NGS;
use ngs\framework\AbstractAction;
use obs\security\RequestGroups;

    class AddNumberAction extends AbstractAction {

        public function service() {
            if (!isset(NGS()->args()->number) || empty(NGS()->args()->number) || NGS()->args()->number<=0) {
                $_SESSION['error_message'] = "Please input positive number";
                $this->redirect('');
            }
            $number = intval(NGS()->args()->getNumber());
            $userId = NGS()->getSessionManager()->getUserId();
            $observerDto = ObserverManager::getInstance()->selectByPK($userId);
            $areaId = $observerDto->getAreaId();
            $rowId = RealVoterNumberManager::getInstance()->addRow($number, 0, $areaId);
            $dto = RealVoterNumberManager::getInstance()->selectByPK($rowId);
            $voterId = $dto->getVoterId();
            
            $_SESSION['can_revert'] = 1; 
            if ($voterId > 0) {
                $voter = VoterManager::getInstance()->selectByPK($voterId);
                $_SESSION['success_message'] = $number. ' '. $voter->getFirstName() . ' ' . $voter->getLastName() . ' Successfully added';
            } else {
                $_SESSION['error_message'] = "Number does not exist in list!";
                $this->redirect('');
            }
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$observerRequest;
        }

    }

}
    