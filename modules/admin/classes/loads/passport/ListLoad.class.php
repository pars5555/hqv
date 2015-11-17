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

    use admin\loads\BaseAdminLoad;
    use NGS;

    class ListLoad extends BaseAdminLoad {

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
            $rows = \admin\managers\RealVoterManager::getInstance()->selectAdvance('*', ['moderator_id', '=', $moderatorId], ['create_datetime'], 'DESC', $offset, $limit);
            $count = \admin\managers\RealVoterManager::getInstance()->getLastSelectAdvanceRowsCount();
            $pageCount = ceil($count / $limit);
            $this->addParam('pageCount', $pageCount);
            $this->addParam('rows', $rows);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/passport/list.tpl";
        }

    }

}
