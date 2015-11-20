<?php

namespace admin\actions\number {

    use admin\managers\RealVoterNumberManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use NGS;

    class DeleteVoteAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $rowId = intval(NGS()->args()->rowId);
            RealVoterNumberManager::getInstance()->deleteByPK($rowId);
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
