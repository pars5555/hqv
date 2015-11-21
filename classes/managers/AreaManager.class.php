<?php

/**
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2010-2015
 * @package managers
 * @version 6.0
 *
 */

namespace hqv\managers {

    use hqv\dal\mappers\AreaMapper;

    class AreaManager extends AdvancedAbstractManager {

        /**
         * @var $instance
         */
        public static $instance;

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new AreaManager(AreaMapper::getInstance());
            }
            return self::$instance;
        }

        public function getRegionNamesArray() {
            $ret = [];
            $allGroupByRegion = $this->mapper->getAllGroupByRegion();
            foreach ($allGroupByRegion as $row) {
                $ret[] = $row->getRegion();
            }
            return $ret;
        }

        public function getRegionCommunitiesArray($region) {
            $regionCommunities = $this->mapper->getRegionCommunities($region);
            $ret = [];
            foreach ($regionCommunities as $row) {
                $ret[] = $row->getCommunity();
            }
            return $ret;
        }

        public function getByRegionAndCommunity($region, $community) {
            $communityPlaces = $this->selectAdvance('*', ['region', '=', "'$region'", 'and', 'community', '=', "'$community'"], ['address']);
            $ret = [];
            foreach ($communityPlaces as $row) {
                $ret[$row->getId()] = $row->getAddress()."(".$row->getTerritoryId()."/".$row->getAreaId().")";
            }
            return $ret;
        }

    }

}
