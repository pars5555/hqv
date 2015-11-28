<?php

/**
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2010-2015
 * @package loads.site.main
 * @version 2.0.0
 */

namespace hqv\loads\main {

    use hqv\loads\NgsLoad;
    use hqv\managers\AreaManager;
    use hqv\managers\VoterManager;
    use hqv\security\RequestGroups;
    use NGS;

    class SearchResultLoad extends NgsLoad {

        public function load() {
            list($birthDate, $firstName, $lastName, $fatherName) = $this->validateParams();
            $where = [];
            if (!empty($birthDate)) {
                $where[] = 'birth_date';
                $where[] = '=';
                $where[] = "'$birthDate'";
            }
            if (!empty($firstName)) {
                if (!empty($where)) {
                    $where[] = 'and';
                }
                $where[] = 'first_name';
                $where[] = 'like';
                $where[] = "'$firstName%'";
            }
            if (!empty($lastName)) {
                if (!empty($where)) {
                    $where[] = 'and';
                }
                $where[] = 'last_name';
                $where[] = 'like';
                $where[] = "'$lastName%'";
            }
            if (!empty($fatherName)) {
                if (!empty($where)) {
                    $where[] = 'and';
                }
                $where[] = 'father_name';
                $where[] = 'like';
                $where[] = "'$fatherName%'";
            }
            $voters = VoterManager::getInstance()->selectAdvance('*', $where, ['first_name', 'last_name', 'father_name'], 'ASC', 0, 100);
            $areaIds = $this->getAreaIds($voters);
            $areas = [];
            if (!empty($areaIds)) {
                $areaIdsString = implode(',', $areaIds);
                $areas = AreaManager::getInstance()->selectAdvance('*', ['id', 'in', "($areaIdsString)"], null, null, null, null, true);
            }
            $this->addParam('areas', $areas);
            $this->addParam('voters', $voters);
        }

        public function validateParams() {
            $date = '';
            if (!empty(NGS()->args()->birthDate)) {
                $date = NGS()->args()->birthDate;
            }
            $firstName = '';
            if (!empty(NGS()->args()->firstName)) {

                $firstName = NGS()->args()->firstName;
            }
            $lastName = '';
            if (!empty(NGS()->args()->lastName)) {

                $lastName = NGS()->args()->lastName;
            }
            $fatherName = '';
            if (!empty(NGS()->args()->fatherName)) {

                $fatherName = NGS()->args()->fatherName;
            }
            return [$date, $firstName, $lastName, $fatherName];
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/search_result.tpl";
        }

        public function getRequestGroup() {
            RequestGroups::$guestRequest;
        }

        public function getAreaIds($voters) {
            $ret = [];
            foreach ($voters as $voter) {
                $ret[] = $voter->getAreaId();
            }
            return $ret;
        }

    }

}
