<?php

/**
 * UserManager class
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */

namespace ngsadmin\managers {

  use ngsadmin\dal\mappers\OrderHistoryMapper;
  use ngs\framework\AbstractManager;

  class OrderHistoryManager extends AbstractManager {

    /**
     * @var singleton instance of class
     */
    private static $instance = null;

    /**
     * Initializes DB mappers
     *
     * @param object $config
     * @param object $args
     * @return
     */
    function __construct() {
      $this->mapper = OrderHistoryMapper::getInstance();
    }

    /**
     * Returns an singleton instance of this class
     *
     * @param object $config
     * @param object $args
     * @return
     */
    public static function getInstance() {

      if (self::$instance == null) {
        self::$instance = new OrderHistoryManager();
      }
      return self::$instance;
    }
    
    public function getUserById($id){
      return $this->mapper->selectByPK($id);
    }
    
    public function createDtoFromArgs($args){
      $userDto = $this->mapper->createDto();
      foreach ($args as $key => $value) {
        if($userDto->checkField($key) && $value){
          $fieldValue = $userDto->getFieldValue($key);
          $functionName =  "set" . ucfirst($fieldValue);
          $userDto->$functionName($value);
        }
        
      }
      return $userDto;
    }
    
    public function updateUser($userDto){
      return $this->mapper->updateByPK($userDto);
    }
    
    public function addUser($userDto){
      return $this->mapper->insertDto($userDto);
    }
    public function deleteOrderHistoryByUserId($userId){
        return $this->mapper->deleteOrderHistoryByUserId($userId);
    }

//    public function getOrderHistoryCount($args=array()) {
//      if(isset($args["order_by"])){
//        $this->mapper->setOrderBy($args["order_by"]);
//      }
//      if(isset($args["sort_by"])){
//        $this->mapper->setSortBy($args["sort_by"]);
//      }
//      return $this->mapper->getOrderHistory($args);
//    }
    
     public function getOrderHistoryCount($args){
      if(isset($args["order_by"])){
        $this->mapper->setOrderBy($args["order_by"]);
      }
      if(isset($args["sort_by"])){
        $this->mapper->setSortBy($args["sort_by"]);
      }
    
      if(isset($args["search_key"]) && isset($args["search_type"])){
        $this->mapper->setSearchParams($args["search_type"], $args["search_key"]);
      }
      return $this->mapper->getOrderHistoryCount($args);
    }
    
    public function getOrderHistory($args) {
      if(isset($args["order_by"])){
        $this->mapper->setOrderBy($args["order_by"]);
      }
      if(isset($args["sort_by"])){
        $this->mapper->setSortBy($args["sort_by"]);
      }
      if(isset($args["limit"])){
        $this->mapper->setLimit($args["limit"]);
      }
      if(isset($args["offset"])){
        $this->mapper->setOffset($args["offset"]);
      }
      if(isset($args["search_key"]) && isset($args["search_type"])){
        $this->mapper->setSearchParams($args["search_type"], $args["search_key"]);
      }
      return $this->mapper->getOrderHistory($args);
    }

  }

}
