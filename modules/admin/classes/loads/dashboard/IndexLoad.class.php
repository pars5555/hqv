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
    use admin\loads\BaseAdminLoad;
    use NGS;

    class IndexLoad extends BaseAdminLoad {

        public function load() {
            $dataCountGroupByVoter = \hqv\managers\VoterDataManager::getInstance()->getDataCountGroupByVoterId();
            $this->addParam('countGroupByVoter', $dataCountGroupByVoter);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/index.tpl";
        }

    }

}
