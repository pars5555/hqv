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
    use admin\managers\RealVoterPassportManager;
    use hqv\managers\AreaManager;
    use NGS;

    class AreaStatisticsLoad extends ModeratorLoad {

        public function load() {
            if (isset(NGS()->args()->areaId)) {
                $areaId = intval(NGS()->args()->areaId);
                $area = AreaManager::getInstance()->selectByPK($areaId);
                if (isset($area)) {
                    $areaPassportVoters = RealVoterPassportManager::getInstance()->selectAdvance('*', ['area_id', '=', $areaId]);
                    $this->addParam('areaPassportVotersCount', count($areaPassportVoters));
                }
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/area_statistics.tpl";
        }

    }

}
