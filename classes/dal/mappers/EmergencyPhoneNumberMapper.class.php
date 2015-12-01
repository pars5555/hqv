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

    use hqv\dal\dto\EmergencyPhoneNumberDto;

    class EmergencyPhoneNumberMapper extends AdvancedAbstractMysqlMapper {

        private static $instance;
        public $tableName = "emergency_phone_numbers";

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new EmergencyPhoneNumberMapper();
            }
            return self::$instance;
        }

        public function createDto() {
            return new EmergencyPhoneNumberDto();
        }

        public function getPKFieldName() {
            return "id";
        }

        public function getTableName() {
            return $this->tableName;
        }

        public function selectNonDoneCountGroupByIp() {
            $sql = "SELECT COUNT(*) as `count` FROM (SELECT * FROM `%s` WHERE is_done = 0 GROUP BY ip_address) AS ddd";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function selectGroupByIp() {
            $sql = "SELECT *, COUNT(ip_address) as `count` FROM `%s` GROUP BY ip_address ORDER BY `datetime` DESC";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return $this->fetchRows($sqlQuery);
        }

    }

}
