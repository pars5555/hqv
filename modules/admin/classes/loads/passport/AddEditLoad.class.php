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

    class AddEditLoad extends BaseAdminLoad {

        public function load() {
            if (isset(NGS()->args()->rowId)) {
                $realVoter = RealVoterManager::getInstance()->selectByPK(NGS()->args()->rowId);
                if (isset($realVoter)) {
                    $this->addParam('row', $realVoter);
                    $areaId = $realVoter->getAreaId();
                    if (intval($areaId) > 0) {
                        $area = \hqv\managers\AreaManager::getInstance()->selectByPK($areaId);
                        $this->addParam('area', $area);
                    }
                }
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/passport/add_edit.tpl";
        }

    }

}
    