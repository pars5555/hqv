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
    use hqv\managers\AreaManager;
    use NGS;

    class AreaStatisticsLoad extends ModeratorLoad {

        public function load() {
            if (isset(NGS()->args()->areaId)) {
                $area = AreaManager::getInstance()->selectByPK(NGS()->args()->areaId);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/area_statistics.tpl";
        }

    }

}
