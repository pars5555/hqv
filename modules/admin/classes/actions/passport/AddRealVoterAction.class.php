<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterManager;
    use admin\security\RequestGroups;
    use NGS;
    use ngs\framework\AbstractAction;

    class AddRealVoterAction extends AbstractAction {

        public function service() {
            $validateFields = $this->validateFields();
            if (!is_array($validateFields)) {
                $this->addParam('status', 'error');
                $this->addParam('message', $validateFields);
                return;
            }
            list($firstName, $lastName, $fatherName, $birthDate, $rowId ) = $validateFields;
            $moderatorId = NGS()->getSessionManager()->getUserId();
            if ($rowId == 0) {
                RealVoterManager::getInstance()->addRow($firstName, $lastName, $fatherName, $birthDate, $moderatorId);
            } else {
                RealVoterManager::getInstance()->editRow($rowId, $firstName, $lastName, $fatherName, $birthDate, $moderatorId);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$adminRequest;
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
            $birthDate = NGS()->args()->birthYear . '-' . NGS()->args()->birthMonth . '-' . NGS()->args()->birthDay;
            return [NGS()->args()->firstName, NGS()->args()->lastName, NGS()->args()->fatherName, $birthDate, intval(NGS()->args()->rowId)];
        }

    }

}
