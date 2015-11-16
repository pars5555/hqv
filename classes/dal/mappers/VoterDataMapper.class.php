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

    use hqv\dal\dto\VoterDataDto;

    class VoterDataMapper extends AdvancedAbstractMysqlMapper {

        private static $instance;
        public $tableName = "voter_data";

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new VoterDataMapper();
            }
            return self::$instance;
        }

        public function createDto() {
            return new VoterDataDto();
        }

        public function getPKFieldName() {
            return "id";
        }

        public function getTableName() {
            return $this->tableName;
        }

        public function getDataCountGroupByVoterId() {
            $sql = "SELECT COUNT(*) as `count` FROM (SELECT id FROM `%s` GROUP BY `voter_id`) AS aaa";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return $this->fetchField($sqlQuery, 'count');
        }
    }

}
