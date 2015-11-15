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
  use ngsadmin\dal\dto\CountryDto;

  class CountryMapper extends NgsAdminMapper {

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
      $this->tableName = "country";
    }

    /**
     * Returns an singleton instance of this class
     * @return
     */
    public static function getInstance() {
      if (self::$instance == null) {
        self::$instance = new CountryMapper();
      }
      return self::$instance;
    }

    /**
     * @see AbstractMapper::createDto()
     */
    public function createDto() {
      return new CountryDto();
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

    private $GET_COUNTRY_INFO = "SELECT * FROM `country` 
                                          ORDER BY %s %s LIMIT :offset, :limit";

    public function getCountryInfo() {
      if ($this->getOrderBy() == null) {
        $this->setOrderBy("id");
      }

      $sql = sprintf($this->GET_COUNTRY_INFO, "`country`.".$this->getOrderBy(), $this->getSortBy());

      $params = array("offset" => $this->getOffset(), "limit" => $this->getLimit());
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
