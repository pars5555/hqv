<?php

namespace admin\actions\prevote {

    use hqv\actions\BaseAction;
    use hqv\managers\TranslationManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;
    use util\NgsTemplater;

    class AddDataAction extends BaseAction {

        public function service() {
            $validateData = $this->validateData();
            if ($validateData) {
                list($firstName, $lastName, $fatherName, $birthYear, $birthMonth, $birthDay) = $validateData;

                $where = ['first_name', 'like', "'$firstName%'", 'and', 'last_name', 'like', "'$lastName%'", 'and', 'YEAR(birth_date)', '=', "'$birthYear'"];
                if (!empty($fatherName)) {
                    $where[] = 'and';
                    $where[] = 'father_name';
                    $where[] = 'like';
                    $where[] = "'$fatherName%'";
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
                if (!empty($rows) && is_array($rows) && count($rows) === 1) {
                    $voter = $rows[0];
                    $alreadyExistsRows = VoterDataManager::getInstance()->selectByField('voter_id', $voter->getId());
                    if ($alreadyExistsRows) {
                        $alreadyExistsVoter = VoterManager::getInstance()->selectByPK($voter->getId());
                        $this->addParam('status', 'error');
                        $this->addParam('message', 'Already Exists!<br> '. $alreadyExistsVoter->getFirstName() . ' ' . $alreadyExistsVoter->getLastName() . ' ' . $alreadyExistsVoter->getFatherName() . ' ' . $alreadyExistsVoter->getBirthDate() );
                        return;
                    }

                    VoterDataManager::getInstance()->addRowFromModerator($voter->getId());
                    return;
                }
                $this->addParam('status', 'error');
                $message = "";
                if (empty($rows)) {
                    $message = "Not Found!";
                } else {
                    foreach ($rows as $row) {
                        $message .= $row->getFirstName() . ' ' . $row->getLastName() . ' ' . $row->getFatherName() . ' ' . $row->getBirthDate() . '<br>';
                    }
                }
                $this->addParam('message', $message);
            } else {
                $this->addParam('status', 'error');
                $this->addParam('message', "First Name, Last Name, Birth Year is required!");
            }
        }

        public function validateData() {
            if (empty(NGS()->args()->firstName)) {
                return false;
            }
            if (empty(NGS()->args()->lastName)) {
                return false;
            }
            if (empty(NGS()->args()->birthYear)) {
                return false;
            }
            $fatherName = "";
            if (isset(NGS()->args()->fatherName)) {
                $fatherName = NGS()->args()->fatherName;
            }
            $birthMonth = "";
            if (isset(NGS()->args()->birthMonth)) {
                $birthMonth = NGS()->args()->birthMonth;
            }
            $birthDay = "";
            if (isset(NGS()->args()->birthDay)) {
                $birthDay = NGS()->args()->birthDay;
            }

            return [trim(NGS()->args()->firstName), trim(NGS()->args()->lastName), trim($fatherName), NGS()->args()->birthYear, $birthMonth, $birthDay];
        }

    }

}
