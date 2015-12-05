<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
    use hqv\actions\BaseAction;
    use hqv\managers\VoterManager;
    use NGS;
    use obs\security\RequestGroups;

    class AddRealVoterAction extends BaseAction {

        public function service() {
            $validateFields = $this->validateFields();
            if (!is_array($validateFields)) {
                $this->addParam('status', 'error');
                $this->addParam('message', $validateFields);
                return;
            }
            list($firstName, $lastName, $fatherName, $birthYear, $birthMonth, $birthDay, $rowId, $areaId, $passportType) = $validateFields;
            $where = ['first_name', '=', "'$firstName'", 'and', 'last_name', '=', "'$lastName'", 'and', 'area_id', '=', $areaId];
            if (!empty($fatherName)) {
                $where[] = 'and';
                $where[] = 'father_name';
                $where[] = 'like';
                $where[] = "'$fatherName%'";
            }
            if (!empty($birthYear)) {
                $where[] = 'and';
                $where[] = 'YEAR(birth_date)';
                $where[] = '=';
                $where[] = "'$birthYear'";
            }
            if (!empty($birthMonth)) {
                $where[] = 'and';
                $where[] = 'MONTH(birth_date)';
                $where[] = '=';
                $where[] = "'$birthMonth'";
            }
            if (!empty($birthDay)) {
                $where[] = 'and';
                $where[] = 'DAY(birth_date)';
                $where[] = '=';
                $where[] = "'$birthDay'";
            }
            $moderatorId = NGS()->getSessionManager()->getUserId();
            $rows = VoterManager::getInstance()->selectAdvance('*', $where);
            $voter = false;
            if (!empty($rows)) {
                $voter = $rows[0];
            }

            if ($voter) {
                if ($rowId == 0) {
                    RealVoterPassportManager::getInstance()->addRow($voter->getId(), 1, $voter->getFirstName(), $voter->getLastName(), $voter->getFatherName(), $voter->getBirthDate(), $moderatorId, $areaId, $passportType);
                } else {
                    RealVoterPassportManager::getInstance()->editRow($voter->getId(), 1, $rowId, $voter->getFirstName(), $voter->getLastName(), $voter->getFatherName(), $voter->getBirthDate(), $moderatorId, $areaId, $passportType);
                }
                return;
            }

            $where = ['first_name', '=', "'$firstName'", 'and', 'last_name', '=', "'$lastName'"];
            if (!empty($fatherName)) {
                $where[] = 'and';
                $where[] = 'father_name';
                $where[] = 'like';
                $where[] = "'$fatherName%'";
            }
            if (!empty($birthYear)) {
                $where[] = 'and';
                $where[] = 'YEAR(birth_date)';
                $where[] = '=';
                $where[] = "'$birthYear'";
            }
            if (!empty($birthMonth)) {
                $where[] = 'and';
                $where[] = 'MONTH(birth_date)';
                $where[] = '=';
                $where[] = "'$birthMonth'";
            }
            if (!empty($birthDay)) {
                $where[] = 'and';
                $where[] = 'DAY(birth_date)';
                $where[] = '=';
                $where[] = "'$birthDay'";
            }
            $rows = VoterManager::getInstance()->selectAdvance('*', $where);
            
            $voter = false;
            if (!empty($rows) && count($rows) === 1) {
                $voter = $rows[0];
            }

            if ($voter) {
                $birthDate = $voter->getBirthData();
                if ($rowId == 0) {
                    RealVoterPassportManager::getInstance()->addRow($voter->getId(), 0, $voter->getFirstName(), $voter->getLastName(), $voter->getFatherName(), $voter->getBirthDate(), $moderatorId, $areaId, $passportType);
                } else {
                    RealVoterPassportManager::getInstance()->editRow($voter->getId(), 0, $rowId, $voter->getFirstName(), $voter->getLastName(), $voter->getFatherName(), $voter->getBirthDate(), $moderatorId, $areaId, $passportType);
                }
                return;
            }

            $birthYear = !empty($birthYear) ? $birthYear : 1900;
            $birthMonth = !empty($birthMonth) ? $birthMonth : 1;
            $birthDay = !empty($birthDay) ? $birthDay : 1;
            $birthDate = $birthYear . '-' . $birthMonth . '-' . $birthDay;
            if ($rowId == 0) {
                RealVoterPassportManager::getInstance()->addRow(0, 0, $firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId, $passportType);
            } else {
                RealVoterPassportManager::getInstance()->editRow(0, 0, $rowId, $firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId, $passportType);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

        public function validateFields() {
            if (empty(NGS()->args()->firstName)) {
                return 'Empty First Name';
            }
            if (empty(NGS()->args()->lastName)) {
                return 'Empty Last Name';
            }
            if (!isset(NGS()->args()->rowId)) {
                return 'Missing Row Id';
            }
            if (!isset(NGS()->args()->areaId)) {
                return 'Missing Area Id';
            }
            if (!isset(NGS()->args()->passportType)) {
                return 'Missing Passport Type';
            }
            $firstName = NGS()->args()->firstName;
            $lastName = NGS()->args()->lastName;
            $fatherName = "";
            if (isset(NGS()->args()->fatherName)) {
                $fatherName = NGS()->args()->fatherName;
            }
            $birthYear = "";
            if (isset(NGS()->args()->birthYear)) {
                $birthYear = NGS()->args()->birthYear;
            }
            $birthMonth = "";
            if (isset(NGS()->args()->birthMonth)) {
                $birthMonth = NGS()->args()->birthMonth;
            }
            $birthDay = "";
            if (isset(NGS()->args()->birthDay)) {
                $birthDay = NGS()->args()->birthDay;
            }
            $firstName = str_replace('և', 'եւ', $firstName);
            $firstName = str_replace('եվ', 'եւ', $firstName);
            $firstName = str_replace('Եվ', 'Եւ', $firstName);
            $lastName = str_replace('և', 'եւ', $lastName);
            $lastName = str_replace('եվ', 'եւ', $lastName);
            $lastName = str_replace('Եվ', 'Եւ', $lastName);
            $fatherName = str_replace('և', 'եւ', $fatherName);
            $fatherName = str_replace('եվ', 'եւ', $fatherName);
            $fatherName = str_replace('Եվ', 'Եւ', $fatherName);

            $firstName = $this->mb_ucfirst($firstName);
            $lastName = $this->mb_ucfirst($lastName);
            $fatherName = $this->mb_ucfirst($fatherName);

            return [trim($firstName), trim($lastName), trim($fatherName), $birthYear, $birthMonth, $birthDay, intval(NGS()->args()->rowId)
                , intval(NGS()->args()->areaId), NGS()->args()->passportType];
        }

        public function mb_ucfirst($string, $encoding = "UTF-8") {
            $strlen = mb_strlen($string, $encoding);
            $firstChar = mb_substr($string, 0, 1, $encoding);
            $then = mb_substr($string, 1, $strlen - 1, $encoding);
            return mb_strtoupper($firstChar, $encoding) . $then;
        }

    }

}
