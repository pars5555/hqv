<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
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
            if (!isset(NGS()->args()->firstName) || empty(NGS()->args()->firstName)) {
                return 'Empty First Name';
            }
            if (!isset(NGS()->args()->lastName) || empty(NGS()->args()->lastName)) {
                return 'Empty Last Name';
            }
            if (!isset(NGS()->args()->fatherName)) {
                return 'Missing Last Name';
            }
            if (!isset(NGS()->args()->birthYear)) {
                return 'Missing Birth Year';
            }
            if (!isset(NGS()->args()->birthMonth)) {
                return 'Missing Birth Month';
            }
            if (!isset(NGS()->args()->birthDay)) {
                return 'Missing Birth Day';
            }
            if (!isset(NGS()->args()->rowId)) {
                return 'Missing Row Id';
            }
            if (!isset(NGS()->args()->areaId)) {
                return 'Missing Area Id';
            }
            $birthDate = NGS()->args()->birthYear . '-' . NGS()->args()->birthMonth . '-' . NGS()->args()->birthDay;
            return [NGS()->args()->firstName, NGS()->args()->lastName, NGS()->args()->fatherName, $birthDate, intval(NGS()->args()->rowId)
                , intval(NGS()->args()->areaId)];
        }

    }

}
