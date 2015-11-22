<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
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
            RealVoterPassportManager::getInstance()->deleteByPK($rowId);
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
