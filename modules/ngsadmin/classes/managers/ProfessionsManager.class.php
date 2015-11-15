<?php

/**
 * UserManager class
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */

namespace ngsadmin\managers {

  use ngsadmin\dal\mappers\ProfessionsMapper;
  use ngs\framework\AbstractManager;

  class ProfessionsManager extends AbstractManager {

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
      $this->mapper = ProfessionsMapper::getInstance();
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
        self::$instance = new ProfessionsManager();
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
    

    
    public function getProfessions($args=array()) {
          if(isset($args["order_by"])){
        $this->mapper->setOrderBy($args["order_by"]);
      }
      if(isset($args["sort_by"])){
        $this->mapper->setSortBy($args["sort_by"]);
      }
      return $this->mapper->getProfessions($args);
    }

  }

}
