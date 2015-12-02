<?php

/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.dal.dto
 * @version 1.0.0
 *
 */

namespace admin\dal\dto {

    use ngs\framework\dal\dto\AbstractDto;

    class ObserverDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id", "username" => "username", "password" => "password", "pass" => "pass", 
            "hash" => "hash","area_id" => "areaId", "last_login" => "lastLogin");

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }


    }

}
