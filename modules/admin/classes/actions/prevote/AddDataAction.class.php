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
                    $where[] = "'$birthMonth%'";
                }
                if (!empty($birthDay)) {
                    $where[] = 'and';
                    $where[] = 'DAY(birth_date)';
                    $where[] = '=';
                    $where[] = "'$birthDay%'";
                }

                $rows = VoterManager::getInstance()->selectAdvance('*', $where);
                if (!empty($rows) && is_array($rows) && count($row) === 1) {
                    $voter = $rows[0];
                    VoterDataManager::getInstance()->addRowFromModerator($voter->getId());
                }
            }
        }

        public function validateData() {
            if (!isset(NGS()->args()->firstName)) {
                return false;
            }
            if (!isset(NGS()->args()->lastName)) {
                return false;
            }
            if (!isset(NGS()->args()->birthYear)) {
                return false;
            }
            $fatherName = "";
            if (isset(NGS()->args()->lastName)) {
                $fatherName = NGS()->args()->lastName;
            }
            $birthMonth = "";
            if (isset(NGS()->args()->birthMonth)) {
                $fatherName = NGS()->args()->birthMonth;
            }
            $birthDay = "";
            if (isset(NGS()->args()->birthDay)) {
                $fatherName = NGS()->args()->birthDay;
            }

            return [NGS()->args()->firstName, NGS()->args()->lastName, $fatherName, NGS()->args()->birthYear, $birthMonth, $birthDay];
        }

    }

}
