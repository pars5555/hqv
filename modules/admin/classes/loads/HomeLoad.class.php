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

namespace admin\loads {

    use NGS;

    class HomeLoad extends BaseLoad {

        public function load() {
            
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/home.tpl";
        }

    }

}
