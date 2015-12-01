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

namespace admin\loads\emergency {

    use admin\loads\ModeratorLoad;
    use hqv\managers\EmergencyPhoneNumberManager;
    use NGS;

    class IndexLoad extends ModeratorLoad {

        public function load() {
            $selectAll = EmergencyPhoneNumberManager::getInstance()->selectGroupByIp();
            $notDoneCount = EmergencyPhoneNumberManager::getInstance()->selectNonDoneCountGroupByIp();
            $this->addParam('rows', $selectAll);
            $this->addParam('notDoneCount', $notDoneCount);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/emergency/index.tpl";
        }

    }

}
