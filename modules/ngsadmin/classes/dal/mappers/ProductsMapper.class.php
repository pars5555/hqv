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
    use ngsadmin\dal\dto\ProductDto;

    class ProductsMapper extends TableAbstractMapper {

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
            $this->tableName = "products";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new ProductsMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new ProductDto();
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

        private static $SEARCH_PRODUCT = "SELECT * FROM %s WHERE product_name LIKE '%s'";

        public function getMatchedArrayBySearchKey($searchKey) {
            $sql = sprintf(self::$SEARCH_PRODUCT, $this->getTableName(), '%' . $searchKey . '%');
            $dtos = $this->fetchRows($sql);
            if (count($dtos) != 0) {
                return $dtos;
            }
            return null;
        }

    }

}
