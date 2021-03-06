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

namespace admin\loads\number {

    use admin\loads\ModeratorLoad;
    use admin\managers\RealVoterNumberManager;
    use hqv\managers\AreaManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class ListLoad extends ModeratorLoad {

        public function load() {
            global $numberAreaId;
            if (isset(NGS()->args()->areaId)) {
                $numberAreaId = NGS()->args()->areaId;
            }
           $userType =  NGS()->getSessionManager()->getUserType();
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
            $where = ['area_id', '=',$numberAreaId];
            
            if ($userType == \admin\security\UserGroups::$MODERATOR)
            
            {
              $where[] =   'and';
              $where[] =   'moderator_id';
              $where[] =   '=';
              $where[] =   $moderatorId;
            } 
            $rows = RealVoterNumberManager::getInstance()->selectAdvance('*',$where, ['create_datetime'], 'DESC', $offset, $limit);
            $voterIdsArray = $this->getVoterIdsArray($rows);
            $areaIdsArray = $this->getAreaIdsArray($rows);

            $duplicatedInListRealVoters = [];
            $voters = [];
            $areas = [];
            $preVoteData = [];
            if (!empty($voterIdsArray)) {
                $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
                $areas = AreaManager::getInstance()->selectByPKs($areaIdsArray, true);
                $duplicatedInListRealVoters = RealVoterNumberManager::getInstance()->getDuplicatedInListRealVotersRowIds($voterIdsArray);
                $voterIdsSqlString = "(" . implode(',', $voterIdsArray) . ")";
                $preVoteData = VoterDataManager::getInstance()->selectAdvance('*', ['voter_id', 'in', $voterIdsSqlString]);
                $preVoteData = $this->MapByVoterId($preVoteData);
            }


            $count = RealVoterNumberManager::getInstance()->getLastSelectAdvanceRowsCount();
            $pageCount = ceil($count / $limit);
            if ($count == 0) {
                $pageCount = 1;
            }
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $rows);
            $this->addParam('voters', $voters);
            $this->addParam('areas', $areas);
            $this->addParam('duplicatedInListMappedById', $duplicatedInListRealVoters);
            $this->addParam('preVoteData', $preVoteData);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/number/list.tpl";
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

        private function getAreaIdsArray($rows) {
            $ret = [];
            foreach ($rows as $row) {
                $areaId = trim($row->getAreaId());
                if (!empty($areaId)) {
                    $ret[] = $areaId;
                }
            }
            return $ret;
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
