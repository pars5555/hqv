<?php

/**
 * AdminMapper class is extended class from AbstractMapper.
 * It contatins all read and write functions which are working with admin table.
 *
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.dal.mappers
 * @version 1.0.0
 *
 */

namespace admin\dal\mappers {

    use admin\dal\dto\RealVoterNumberTmpDto;
    use hqv\dal\mappers\AdvancedAbstractMysqlMapper;
    use ngs\framework\dal\mappers\AbstractMapper;

    class RealVoterNumberTmpMapper extends AdvancedAbstractMysqlMapper {

        /**
         * @var table name in DB
         */
        private $tableName;

        /**
         * @var an instance of this class
         */
        private static $instance = null;

        /**
         * Initializes DBMS pointers and table name private class member.
         */
        function __construct() {
            // Initialize the dbms pointer.
            parent::__construct();

            // Initialize table name.
            $this->tableName = "real_voter_number_tmp";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new RealVoterNumberTmpMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new RealVoterNumberTmpDto();
        }

        /**
         * @see AbstractMapper::getPKFieldName()
         */
        public function getPKFieldName() {
            return "id";
        }

        /**
         * @see AbstractMapper::getTableName()
         */
        public function getTableName() {
            return $this->tableName;
        }

    }

}
