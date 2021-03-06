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

namespace admin\loads\dashboard {

    use admin\loads\ModeratorLoad;
    use NGS;

    class IndexLoad extends ModeratorLoad {

        public function load() {
             $allAreaIdsMappedByTerritoryId = \hqv\managers\AreaManager::getInstance()->getAllAreaIdsMappedByTerritoryId();
             $allTerritoriesIds = array_keys($allAreaIdsMappedByTerritoryId);
             asort($allTerritoriesIds );
             $this->addParam('allTerritoryIds', $allTerritoriesIds  );
        }

        public function getDefaultLoads() {
            $loads = array();
            $loads["area"]["action"] = "admin.loads.dashboard.area_selection";
            $loads["area"]["args"] = array();
            $loads["statistics"]["action"] = "admin.loads.dashboard.statistics";
            $loads["statistics"]["args"] = array();
            return $loads;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/index.tpl";
        }

    }

}
