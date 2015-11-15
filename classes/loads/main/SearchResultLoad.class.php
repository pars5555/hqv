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
    use hqv\managers\VoterManager;
    use hqv\security\RequestGroups;
    use NGS;

    class SearchResultLoad extends NgsLoad {

        public function load() {
            list($birthDate, $firstName, $lastName) = $this->validateParams();
            $where = ['birth_date', '=', "'$birthDate'"];
            if (!empty($firstName)) {
                $where[] = 'and';
                $where[] = 'first_name';
                $where[] = 'like';
                $where[] = "'$firstName%'";
            }
            if (!empty($firstName)) {
                $where[] = 'and';
                $where[] = 'last_name';
                $where[] = 'like';
                $where[] = "'$lastName%'";
            }
            $voters = VoterManager::getInstance()->selectAdvance('*', $where, ['first_name']);
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
            return [$date, $firstName, $lastName];
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/search_result.tpl";
        }

        public function getRequestGroup() {
            RequestGroups::$guestRequest;
        }

    }

}
