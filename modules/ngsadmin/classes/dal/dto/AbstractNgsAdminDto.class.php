<?php
/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package ngsadmin.dal.dtongs
 * @version 1.0.0
 *
 */
use ngs\framework\dal\dto\AbstractDto;

namespace ngsadmin\dal\dto {
  class AbstractNgsAdminDto extends \ngs\framework\dal\dto\AbstractDto {

    // Map of DB value to Field value
    protected $mapArray = array("id" => "id", "username" => "username", "password" => "password");

    // constructs class instance
    public function __construct() {

    }

    // returns map array
    public function getMapArray() {
      return $this->mapArray;
    }

  }

}
