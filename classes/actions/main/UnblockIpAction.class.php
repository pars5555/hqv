<?php

namespace hqv\actions\main {

    use hqv\actions\BaseAction;
    use hqv\managers\VoterDataManager;
    use NGS;

    class UnblockIpAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->pasphrase) || NGS()->args()->pasphrase != 'P@rs1985') {
                return false;
            }
            if (!isset(NGS()->args()->rowId) && !isset(NGS()->args()->ip)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }

            if (isset(NGS()->args()->ip)) {
                $ipAddress = NGS()->args()->ip;
            } else {
                $rowId = intval(NGS()->args()->rowId);
                $row = VoterDataManager::getInstance()->selectByPK($rowId);
                if (!isset($row)) {
                    $this->addParam('status', 'error');
                    $this->addParam('message', "Wrong data!");
                    return;
                }
                $ipAddress = $row->getIpAddress();
            }
            $rows = VoterDataManager::getInstance()->selectByField('ip_address', $ipAddress);
            foreach ($rows as $row) {
                VoterDataManager::getInstance()->updateField($row->getId(), 'ip_address', $row->getIpAddress() . '_');
            }
        }

    }

}
