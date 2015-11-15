<?php

/**
 * UserManager class
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */

namespace ngsadmin\managers {

use ngs\framework\AbstractManager;
use ngsadmin\dal\mappers\RegisterPagesMapper;

  class RegisterPagesManager extends AbstractManager {

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
      $this->mapper = RegisterPagesMapper::getInstance();
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
        self::$instance = new RegisterPagesManager();
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
    
     public function updateDescription($pageName,$desc){
       return $this ->mapper->updateDescription($pageName,$desc);
    }
    
    public function getPageImages($pageName){
       return $this ->mapper->getPageImages($pageName);
    }
    public function getDescription($page){
       return $this ->mapper->getDescription($page);
    }
    
    
    
    
    public function deleteImageFromPage($id,$path){
        $filePath = realpath(NGS()->getPublicDir(DEFAULT_NS)) . "/data/" .$path;
         $deleteByPk = $this->mapper->deleteByPk($id);
        if(!$deleteByPk){
          return FALSE;
        }
        if(!file_exists($filePath)){
            return;
        }
        unlink($filePath);
        return TRUE;
    }
    public function addImageToPage($type, $filename){
        $item = $this->mapper->createDto();
        $item->setPageName($type);
        $item->setImageName($filename);
        $insertDto = $this->mapper->insertDto($item);
     
        if(!$insertDto){
            return FALSE;
        }
        return $insertDto;
    }

  

  }

}
