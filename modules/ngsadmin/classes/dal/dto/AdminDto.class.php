<?php
/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package ngsadmin.dal.dto
 * @version 1.0.0
 *
 */
namespace ngsadmin\dal\dto {
  
  class AdminDto extends \ngs\framework\dal\dto\AbstractDto {

    // Map of DB value to Field value
    protected $mapArray = array("id" => "id", "username" => "username", "password" => "password", "hash" => "hash", "last_login" => "lastLogin");

    // returns map array
    public function getMapArray() {
      return $this->mapArray;
    }
    
    public function getUserLevel(){
      return "ngsadmin";
    }
  }

}
