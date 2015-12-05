<?php

namespace obs\actions\main {

    use admin\managers\ObserverManager;
    use admin\managers\RealVoterNumberTmpManager;
    use NGS;
    use ngs\framework\AbstractAction;
    use obs\security\RequestGroups;

    class RevertLastInputAction extends AbstractAction {

        public function service() {
            unset($_SESSION['can_revert']);
            $userId = NGS()->getSessionManager()->getUserId();
            $observerDto = ObserverManager::getInstance()->selectByPK($userId);
            $areaId = $observerDto->getAreaId();
            $observerId = NGS()->getSessionManager()->getUserId();
            
            $ret = RealVoterNumberTmpManager::getInstance()->revertObserverLastInput($areaId , $observerId);
            if (!$ret) {
                $_SESSION['error_message'] = "You can not revert!";
            }
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$observerRequest;
        }

    }

}
    