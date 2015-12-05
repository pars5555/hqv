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

namespace admin\loads\numanalyze {

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
            $duplicatedRealVoters = AnalyzeManager::getInstance()->getDuplicatedNumberRealVoters($offset, $limit);
            $this->addParam('duplicatedRealVoters', $duplicatedRealVoters);
            $voterIdsArray = $this->getVoterIdsArray($duplicatedRealVoters);
            $voters = [];
            $preVoteData = [];
            if (!empty($voterIdsArray)) {
                $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
                $voterIdsSqlString = "(" . implode(',', $voterIdsArray) . ")";
                $preVoteData = VoterDataManager::getInstance()->selectAdvance('*', ['voter_id', 'in', $voterIdsSqlString]);
                $preVoteData = $this->MapByVoterId($preVoteData);
            }

            $count = AnalyzeManager::getInstance()->getDuplicatedNumberRealVotersCount();
            $pageCount = ceil($count / $limit);
            if ($count == 0) {
                $pageCount = 1;
            }
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $duplicatedRealVoters);
            $this->addParam('voters', $voters);
            $this->addParam('preVoteData', $preVoteData);
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
            return NGS()->getTemplateDir() . "/numanalyze/list.tpl";
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
