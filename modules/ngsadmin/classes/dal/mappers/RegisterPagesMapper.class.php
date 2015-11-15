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
    use ngsadmin\dal\dto\RegisterPagesDto;

    class RegisterPagesMapper extends NgsAdminMapper {

        /**
         * @var table name in DB
         */
        private $tableName;
        private $sortBy = "asc";

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
            $this->tableName = "registration_pages";
            $this->descTableName = "registration_pages_descriptions";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new RegisterPagesMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new RegisterPagesDto();
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
        
         public function getDescTableName() {
            return $this->descTableName;
        }

        private $UPDATE_PAGE_DESC = "UPDATE `%s` SET `description` = :desc WHERE `name` = :name";

        public function updateDescription($pageName,$desc) {
             $sql = sprintf($this->UPDATE_PAGE_DESC, $this->getDescTableName());
              $params = array("name" => $pageName,'desc'=>$desc);
              $dtos = $this->executeUpdate($sql, $params);
              if(count($dtos) != 0){
                  return true;
              }
             return null;
        }
        
        private $GET_PAGE_DESC = "SELECT `description` FROM %s WHERE `name`=:name";

        public function getDescription($page) {
             $sql = sprintf($this->GET_PAGE_DESC, $this->getDescTableName());
              $params = array("name" => $page);
              $dtos = $this->fetchRows($sql, $params);
              if(count($dtos) != 0){
                  return $dtos[0]->description;
              }
             return null;
        }
        

        private $GET_PAGE_IMAGES = "SELECT * FROM %s WHERE `page_name`=:name";

        public function getPageImages($pageName) {
            $sql = sprintf($this->GET_PAGE_IMAGES, $this->getTableName());

            $params = array("name" => $pageName);
            $dtos = $this->fetchRows($sql, $params);

            if (count($dtos) != 0) {
                return $dtos;
            }
            return null;
        }

        public function setSortBy($sortBy) {
            if (strtolower($sortBy) == "desc" || strtolower($sortBy) == "asc") {
                $this->sortBy = $sortBy;
            }
        }

        public function getSortBy() {
            return $this->sortBy;
        }

    }

}
