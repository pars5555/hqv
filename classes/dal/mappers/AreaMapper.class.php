<?php

/**
 *
 * Mysql mapper class is extended class from AbstractMysqlMapper.
 * It contatins all read and write functions which are working with its table.
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2015
 * @package crm.dal.mappers
 * @version 2.0.0
 *
 */

namespace hqv\dal\mappers {

    use hqv\dal\dto\AreaDto;

    class AreaMapper extends AdvancedAbstractMysqlMapper {

        private static $instance;
        public $tableName = "areas";

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new AreaMapper();
            }
            return self::$instance;
        }

        public function createDto() {
            return new AreaDto();
        }

        public function getPKFieldName() {
            return "id";
        }

        public function getTableName() {
            return $this->tableName;
        }

        public function getAllGroupByRegion() {
            $sql = "SELECT * FROM `%s` GROUP BY region Order By `region`";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return $this->fetchRows($sqlQuery);
        }

        public function getRegionCommunities($region) {
            $sql = "SELECT * FROM `%s` WHERE `region` = '%s' GROUP BY `community` Order By `community`";
            $sqlQuery = sprintf($sql, $this->getTableName(), $region);
            return $this->fetchRows($sqlQuery);
        }

    }

}
