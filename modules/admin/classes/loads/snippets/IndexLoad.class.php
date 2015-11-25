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

namespace admin\loads\snippets {

    use admin\loads\ModeratorLoad;
    use hqv\managers\TranslationManager;
    use NGS;

    class IndexLoad extends ModeratorLoad {

        public function load() {
            $selectAll = TranslationManager::getInstance()->selectAll();
            $this->addParam('rows', $selectAll);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/snippets/index.tpl";
        }

    }

}
