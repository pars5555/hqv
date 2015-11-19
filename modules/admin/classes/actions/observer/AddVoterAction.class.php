<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use NGS;

    class AddVoterAction extends BaseAction {

        public function service() {
            $validateFields = $this->validateFields();
            if (!is_array($validateFields)) {
                $this->addParam('status', 'error');
                $this->addParam('message', $validateFields);
                return;
            }
            list($firstName, $lastName, $fatherName, $birthDate, $rowId, $areaId ) = $validateFields;
            $moderatorId = NGS()->getSessionManager()->getUserId();
            if ($rowId == 0) {
                RealVoterPassportManager::getInstance()->addRow($firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId);
            } else {
                RealVoterPassportManager::getInstance()->editRow($rowId, $firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

        public function validateFields() {
            if (!isset(NGS()->args()->number)) {
                return 'Missing Row Id';
            }
            $birthDate = NGS()->args()->birthYear . '-' . NGS()->args()->birthMonth . '-' . NGS()->args()->birthDay;
            return [NGS()->args()->firstName, NGS()->args()->lastName, NGS()->args()->fatherName, $birthDate, intval(NGS()->args()->rowId)
                , intval(NGS()->args()->areaId)];
        }

    }

}
