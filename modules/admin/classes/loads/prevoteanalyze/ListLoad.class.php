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

namespace admin\loads\prevoteanalyze {

    use admin\loads\ModeratorLoad;
    use admin\managers\AnalyzeManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class ListLoad extends ModeratorLoad {

        public function load() {
            $moderatorId = NGS()->getSessionManager()->getUserId();
            $limit = 20;
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
            $duplicatedOrDeathVoters = VoterDataManager::getInstance()->getDuplicatedOrDeathData($offset, $limit);
            $voterIdsArray = $this->getVoterIdsArray($duplicatedOrDeathVoters);
            $voters = [];
            if (!empty($voterIdsArray)) {
                $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
            }

            $count = VoterDataManager::getInstance()->getDuplicatedOrDeathDataCount();
            $pageCount = ceil($count / $limit);
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $duplicatedOrDeathVoters);
            $this->addParam('voters', $voters);
        }

        private function getVoterIdsArray($rows) {
            $ret = [];
            foreach ($rows as $row) {
                $voterId = trim($row->getVoterId());
                if (!empty($voterId)) {
                    $ret[] = $voterId;
                }
            }
            return $ret;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/prevoteanalyze/list.tpl";
        }

        public function MapByVoterId($dtos) {
            $ret = [];
            foreach ($dtos as $dto) {
                $ret[$dto->getVoterId()] = $dto;
            }
            return $ret;
        }

    }

}
