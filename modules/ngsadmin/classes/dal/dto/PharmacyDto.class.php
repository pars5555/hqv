<?php

/**
 * 
 * UserDto class is extended class from AbstractDto.
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 * 
 */

namespace ngsadmin\dal\dto {

    use ngs\framework\dal\dto\AbstractDto;

    class PharmacyDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id",
            "username" => "username",
            "password" => "password",
            "pharmacy_name" => "pharmacyName",
            "pharmacy_id" => "pharmacyId"
        );

        public function checkField($field) {
            if (isset($this->mapArray[$field])) {
                return true;
            }
            return false;
        }

        // constructs class instance
        public function __construct() {
            
        }

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }

    }

}