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

    class AdditionalVoterDto extends AbstractDto {

        // constructs class instance
        public function __construct() {
            
        }

        // Map of DB value to Field value
        private $mapArray = array(
            "id" => "id", 
            "first_name" => "firstName",
            "last_name" => "lastName",
            "father_name" => "fatherName",
            "birth_date" => "birthDate",
            "bd" => "bd",
            "street" => "street",
            "address" => "address",
            "region" => "community",
            "type" => "type",
            "house" => "house",
            "territory_id" => "territoryId",
            "area_id" => "areaId",
            "area" => "area",
            "voter_id" => "voterId",
            "note" => "note"
            );

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }

    }

}
