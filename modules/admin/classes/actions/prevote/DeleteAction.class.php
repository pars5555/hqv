<?php

namespace admin\actions\prevote {

    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use hqv\managers\VoterDataManager;
    use NGS;

    class DeleteAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $rowId = intval(NGS()->args()->rowId);
            VoterDataManager::getInstance()->deleteByPK($rowId);
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
