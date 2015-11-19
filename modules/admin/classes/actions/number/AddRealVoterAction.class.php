<?php

namespace admin\actions\number {

    use admin\managers\RealVoterNumberManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use NGS;

    class AddRealVoterAction extends BaseAction {

        public function service() {
            $validateFields = $this->validateFields();
            if (!is_array($validateFields)) {
                $this->addParam('status', 'error');
                $this->addParam('message', $validateFields);
                return;
            }
            list($voterNumber, $rowId, $areaId ) = $validateFields;
            $moderatorId = NGS()->getSessionManager()->getUserId();
            if ($rowId == 0) {
                RealVoterNumberManager::getInstance()->addRow($voterNumber,  $moderatorId, $areaId);
            } else {
                RealVoterNumberManager::getInstance()->editRow($rowId, $voterNumber, $moderatorId, $areaId);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

        public function validateFields() {

            if (!isset(NGS()->args()->voterNumber)) {
                return 'Missing Voter Number';
            }
            if (!isset(NGS()->args()->rowId)) {
                return 'Missing Row Id';
            }
            if (!isset(NGS()->args()->areaId)) {
                return 'Missing Area Id';
            }
            return [intval(NGS()->args()->voterNumber), intval(NGS()->args()->rowId), intval(NGS()->args()->areaId)];
        }

    }

}
