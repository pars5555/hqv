<?php

/**
 * NGS demo load for demostration subdomain module structure
 * this class extends from AbstractLoad class
 *
 * this load can called from browser using demosubdomain.*
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @year 2015
 * @version 2.0.0
 * @package loads.demomodule.main
 * @copyright Naghashyan Solutions LLC
 *
 */

namespace admin\loads\voters {

    use admin\loads\ModeratorLoad;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class ListLoad extends ModeratorLoad {

        public function load() {

            $limit = 100;
            $page = 1;
            if (isset(NGS()->args()->page)) {
                $page = intval(NGS()->args()->page);
            }
            if (isset(NGS()->args()->limit)) {
                $limit = intval(NGS()->args()->limit);
            }
            $this->addParam('page', $page);
            $this->addParam('limit', $limit);
            $offset = ($page - 1) * $limit;

            $where = [];
            if (!empty(NGS()->args()->firstName)) {
                $firstName = NGS()->args()->firstName;
                $where [] = 'first_name';
                $where [] = 'like';
                $where [] = "'$firstName%'";
            }
            if (!empty(NGS()->args()->lastName)) {
                $lastName = NGS()->args()->lastName;
                if (!empty($where)) {
                    $where [] = 'and';
                }
                $where [] = 'last_name';
                $where [] = 'like';
                $where [] = "'$lastName%'";
            }
            if (!empty(NGS()->args()->ipAddress)) {
                $ipAddress = NGS()->args()->ipAddress;
                if (!empty($where)) {
                    $where [] = 'and';
                }
                $where [] = 'ip_address';
                $where [] = 'like';
                $where [] = "'$ipAddress%'";
            }
            if (!empty(NGS()->args()->birthYear) && !empty(NGS()->args()->birthMonth) && !empty(NGS()->args()->birthDay)) {
                $birthDate = intval(NGS()->args()->birthYear) . '-' . intval(NGS()->args()->birthMonth) . '-' . intval(NGS()->args()->birthDay);
                if (!empty($where)) {
                    $where [] = 'and';
                }
                $where [] = 'birth_date';
                $where [] = '=';
                $where [] = "'$birthDate'";
            }
            $rows = VoterDataManager::getInstance()->selectJoinVoters($where, $offset, $limit);
            $count = VoterDataManager::getInstance()->selectJoinVotersCount($where);
            $voterIdsArray = $this->getVoterIdsArray($rows);
            $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
            $pageCount = ceil($count / $limit);
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $rows);
            $this->addParam('voters', $voters);
            $this->addParam('total_count', $count);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/voters/list.tpl";
        }

        public function getVoterIdsArray($rows) {
            $ret = [];
            foreach ($rows as $row) {
                $ret [$row->getId()] = $row->getVoterId();
            }
            return $ret;
        }

    }

}
