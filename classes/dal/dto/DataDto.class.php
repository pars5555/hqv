<?php

/**
 * TracksDto mapper class
 * setter and getter generator
 * for ilyov_tracks table
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2015
 * @package dal.dto.tracks
 * @version 6.0
 *
 */

namespace hqv\dal\dto {

    use \ngs\framework\dal\dto\AbstractDto;

    class DataDto extends AbstractDto {

        // constructs class instance
        public function __construct() {
            
        }

        // Map of DB value to Field value
        private $mapArray = array("id" => "id", 
            "F1" => "f1",
            "F2" => "f2",
            "F3" => "f3",
            "F4" => "f4",
            "F5" => "f5",
            "F6" => "f6",
            "F7" => "f7",
            "F8" => "f8",
            "F9" => "f9",
            "F10" => "f10",
            "F11" => "f11"
            );

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }

    }

}
