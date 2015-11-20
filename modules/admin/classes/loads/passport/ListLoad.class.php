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

namespace admin\loads\passport {

    use admin\loads\ModeratorLoad;
    use admin\managers\RealVoterPassportManager;
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
            $rows = RealVoterPassportManager::getInstance()->selectAdvance('*', ['moderator_id', '=', $moderatorId], ['create_datetime'], 'DESC', $offset, $limit);
            $voterIdsArray = $this->getVoterIdsArray($rows);
            $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);

            $duplicatedInListRealVoters = RealVoterPassportManager::getInstance()->getDuplicatedInListRealVoters($voterIdsArray);

            $count = RealVoterPassportManager::getInstance()->getLastSelectAdvanceRowsCount();
            $pageCount = ceil($count / $limit);
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $rows);
            $this->addParam('voters', $voters);
            $this->addParam('duplicatedInListMappedByVoterId', $duplicatedInListRealVoters);
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
            return NGS()->getTemplateDir() . "/passport/list.tpl";
        }

    }

}
