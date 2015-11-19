<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use hqv\managers\AreaManager;
    use NGS;

    class GetRealVoterDataAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $row = RealVoterPassportManager::getInstance()->selectByPK(NGS()->args()->rowId);
            if (isset($row)) {
                $this->addParam('row', $row);
                $areaId = $row->getAreaId();
                if (intval($areaId) > 0) {
                    $area = AreaManager::getInstance()->selectByPK($areaId);
                    $this->addParam('area', $area);
                }
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
            if (!isset(NGS()->args()->areaId)) {
                return 'Missing Area Id';
            }
            $birthDate = NGS()->args()->birthYear . '-' . NGS()->args()->birthMonth . '-' . NGS()->args()->birthDay;
            return [NGS()->args()->firstName, NGS()->args()->lastName, NGS()->args()->fatherName, $birthDate, intval(NGS()->args()->rowId)
                , intval(NGS()->args()->areaId)];
        }

    }

}
