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

    use admin\loads\AdminLoad;
    use hqv\managers\VoterDataManager;
    use NGS;

    class ListLoad extends AdminLoad {

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
            $rows = VoterDataManager::getInstance()->selectAdvance('*', [], ['datetime'], 'DESC', $offset, $limit);
            $count = VoterDataManager::getInstance()->getLastSelectAdvanceRowsCount();
            $voterIdsArray = $this->getVoterIdsArray($rows);
            $voters = \hqv\managers\VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
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
