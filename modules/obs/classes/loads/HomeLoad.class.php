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

namespace obs\loads {

    use NGS;

    class HomeLoad extends ObserverLoad {

        public function load() {
            $this->initErrorMessages();
            $this->initSuccessMessages();
            if (isset($_SESSION['can_revert']) && $_SESSION['can_revert'] == 1)
            {
                $this->addParam('can_revert', 1);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/home.tpl";
        }

    }

}
