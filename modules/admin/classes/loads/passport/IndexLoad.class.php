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
    use NGS;

    class IndexLoad extends ModeratorLoad {

        public function load() {
            
        }

        public function getDefaultLoads() {
            $loads = array();
            $loads["area"]["action"] = "admin.loads.passport.area_selection";
            $loads["area"]["args"] = array();
            $loads["add_edit"]["action"] = "admin.loads.passport.add_edit";
            $loads["add_edit"]["args"] = array();
            $loads["list"]["action"] = "admin.loads.passport.list";
            $loads["list"]["args"] = array();
            return $loads;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/passport/index.tpl";
        }

    }

}
