<?php
namespace obs\actions\main {

    use admin\managers\ObserverManager;
    use admin\managers\RealVoterNumberManager;
    use NGS;
    use ngs\framework\AbstractAction;
    use obs\security\RequestGroups;

    class AddNumberAction extends AbstractAction {

        public function service() {
            $number = intval(NGS()->args()->getNumber());
            $userId = NGS()->getSessionManager()->getUserId();
            $observerDto = ObserverManager::getInstance()->selectByPK($userId);
            RealVoterNumberManager::getInstance()->addRow($number, 0, $observerDto->getAreaId());
            $this->redirect('');
        }

        public function getRequestGroup() {
            return RequestGroups::$observerRequest;
        }

    }

}
