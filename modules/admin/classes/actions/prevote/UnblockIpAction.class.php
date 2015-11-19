<?php

namespace admin\actions\prevote {

    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use hqv\managers\VoterDataManager;
    use NGS;

    class UnblockIpAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $rowId = intval(NGS()->args()->rowId);

            $row = VoterDataManager::getInstance()->selectByPK($rowId);
            if (!isset($row)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Wrong data!");
                return;
            }
            $rows = VoterDataManager::getInstance()->selectByField('ip_address', $row->getIpAddress());
            foreach ($rows as $row) {
                VoterDataManager::getInstance()->updateField($row->getId(), 'ip_address', $row->getIpAddress(). '_');
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
