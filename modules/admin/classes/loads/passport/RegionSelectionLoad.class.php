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

    class RegionSelectionLoad extends BaseAdminLoad {

        public function load() {
            $regionNamesArray = \hqv\managers\AreaManager::getInstance()->getRegionNamesArray();
            $selectedRegion = $regionNamesArray [0];
            if (isset(NGS()->args()->selectedRegion)) {
                $selectedRegion = NGS()->args()->selectedRegion;
            }
            $this->addParam('selectedRegion', $selectedRegion);


            $regionCommunities = \hqv\managers\AreaManager::getInstance()->getRegionCommunitiesArray($selectedRegion);
            $selectedRegionCommunity = $regionCommunities[0];
            if (isset(NGS()->args()->selectedRegionCommunity)) {
                $selectedRegionCommunity = NGS()->args()->selectedRegionCommunity;
            }
            $this->addParam('selectedRegionCommunity', $selectedRegionCommunity);


            $areasMappedById = \hqv\managers\AreaManager::getInstance()->getByRegionAndCommunity($selectedRegion, $selectedRegionCommunity);
            reset($areasMappedById);
            $selectedAreaId = current($areasMappedById);
            if (isset(NGS()->args()->selectedAreaId)) {
                $selectedAreaId = NGS()->args()->selectedAreaId;
            }
            $this->addParam('selectedAreaId', $selectedAreaId);

            $this->addParam('regions', $regionNamesArray);
            $this->addParam('regionCommunities', $regionCommunities);
            $this->addParam('areas', $areasMappedById);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/passport/region_selection.tpl";
        }

    }

}
