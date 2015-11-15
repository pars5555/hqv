<?php

/**
 * UserMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with user table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

    use ngs\framework\dal\mappers\AbstractMapper;
    use ngsadmin\dal\dto\ProfessionsDto;

    class ProfessionsMapper extends NgsAdminMapper {

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
            $this->tableName = "user_professions";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new ProfessionsMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new ProfessionsDto();
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

        private $GET_PROFESSIONS_INFO = "SELECT * FROM `user_professions` 
                                          ORDER BY %s %s LIMIT :offset, :limit";

        public function getProfessions() {
            if ($this->getOrderBy() == null) {
                $this->setOrderBy("id");
            }
            $sql = sprintf($this->GET_PROFESSIONS_INFO, "`user_professions`." . $this->getOrderBy(), $this->getSortBy());

            $params = array("offset" => $this->getOffset(), "limit" => $this->getLimit());
            $dtos = $this->fetchRows($sql, $params);
            if (count($dtos) != 0) {
                return $dtos;
            }
            return null;
        }

    }

}
