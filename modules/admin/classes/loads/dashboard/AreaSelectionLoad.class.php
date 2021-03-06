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

    class AreaSelectionLoad extends ModeratorLoad {

        public function load() {

            if (isset(NGS()->args()->areaId)) {
                $area = AreaManager::getInstance()->selectByPK(NGS()->args()->areaId);
                $selectedRegion = $area->getRegion();
                $selectedRegionCommunity = $area->getCommunity();
                $selectedAreaId = $area->getId();
            }

            $regionNamesArray = AreaManager::getInstance()->getRegionNamesArray();
            if (!isset($selectedRegion)) {
                $selectedRegion = $regionNamesArray [0];
                if (isset(NGS()->args()->selectedRegion)) {
                    $selectedRegion = NGS()->args()->selectedRegion;
                }
            }
            $regionCommunities = AreaManager::getInstance()->getRegionCommunitiesArray($selectedRegion);
            if (!isset($selectedRegionCommunity)) {
                $selectedRegionCommunity = $regionCommunities[0];
                if (isset(NGS()->args()->selectedRegionCommunity)) {
                    $selectedRegionCommunity = NGS()->args()->selectedRegionCommunity;
                }
            }

            $areasMappedById = AreaManager::getInstance()->getByRegionAndCommunity($selectedRegion, $selectedRegionCommunity);
            if (!isset($selectedAreaId)) {
                $areaIds = array_keys($areasMappedById);
                reset($areaIds);
                $selectedAreaId = current($areaIds);
                if (isset(NGS()->args()->selectedAreaId)) {
                    $selectedAreaId = NGS()->args()->selectedAreaId;
                }
            }


            $this->addParam('selectedRegion', $selectedRegion);
            $this->addParam('selectedRegionCommunity', $selectedRegionCommunity);
            $this->addParam('selectedAreaId', $selectedAreaId);
            $this->addParam('regions', $regionNamesArray);
            $this->addParam('regionCommunities', $regionCommunities);
            $this->addParam('areas', $areasMappedById);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/area_selection.tpl";
        }

    }

}
