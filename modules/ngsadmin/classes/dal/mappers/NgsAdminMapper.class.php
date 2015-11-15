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

  use ngs\framework\dal\mappers\AbstractMysqlMapper;

  abstract class NgsAdminMapper extends AbstractMysqlMapper {
    
    
    private $sortBy = "DESC";
    private $orderBy = null;
    private $searchParams = null;
    private $offset = 0;
    private $limit = 10;
    /**
     * Initializes DBMS pointers and table name private class member.
     */
    function __construct() {
      // Initialize the dbms pointer.
      parent::__construct();
    }

    /**
     * Returns an singleton instance of this class
     * @return
     */
    public static function getInstance() {
      if (self::$instance == null) {
        self::$instance = new UserMapper();
      }
      return self::$instance;
    }

    public function setOrderBy($orderBy, $hardSet=false){
      if($hardSet){
        $this->orderBy = $orderBy;
        return;
      }
      $dto = $this->createDto();
      if($dto->checkField($orderBy)){
        $this->orderBy = $orderBy;
      }
    }
    
    public function getOrderBy(){
      return $this->orderBy;
    }
    
    public function setSortBy($sortBy){
      if(strtolower($sortBy) == "desc" || strtolower($sortBy) == "asc"){
        $this->sortBy = $sortBy;
      }
    }
    
    public function getSortBy(){
      return $this->sortBy;
    }
    
    public function setLimit($limit){
      if(is_numeric($limit)){
        $this->limit = $limit;
      }
    }
    
    public function getLimit(){
      return $this->limit;
    }
    
    public function setOffset($offset){
      if(is_numeric($offset)){
        $this->offset = $offset;
      }
    }
    
    public function getOffset(){
      return $this->offset;
    }
    
    public function setSearchParams($field, $value){
      $dto = $this->createDto();
      if($dto->checkField($field)){
        $this->searchParams = array();
        $this->searchParams["field"] = $field;
        $this->searchParams["value"] = $value;
      }
    }
    
    public function getSearchParams(){
      return $this->searchParams;
    }

  }

}
