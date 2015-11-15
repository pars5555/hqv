<?php

/**
 * UserManager class
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */

namespace ngsadmin\managers {

  use ngsadmin\dal\mappers\SkinTypeMapper;
  use ngs\framework\AbstractManager;

  class SkinTypeManager extends AbstractManager {

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
      $this->mapper = SkinTypeMapper::getInstance();
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
        self::$instance = new SkinTypeManager();
      }
      return self::$instance;
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
      public function updateDescription($id,$description){
        return $this->mapper->updateDescription($id,$description);
    }
 
    public function getDescriptionById($skinId){
        return $this->mapper->selectByPK($skinId);
    }
    
    public function getSkinTypes($args=[]) {
      if(isset($args["order_by"])){
        $this->mapper->setOrderBy($args["order_by"]);
      }
      if(isset($args["sort_by"])){
        $this->mapper->setSortBy($args["sort_by"]);
      }
      return $this->mapper->getSkinTypes($args);
    }

  }

}
