<?php

/**
 * 
 * UserProfileScoreDto class is extended class from AbstractDto.
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 * 
 */

namespace ngsadmin\dal\dto {

    use ngs\framework\dal\dto\AbstractDto;

    class OrderHistoryDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id",
            "user_id" => "userId",
            "product_id" => "productId",
            "pharmacy_id" => "pharmacyId",
            "order_date" => "orderDate",
            "purchase" => "purchase",
            "beauty_advisor" => "beautyAdvisor",
            "follow_up" => "followUp",
            "wishlist" => "wishlist",
            "added_date" => "addedDate"
        );

        public function checkField($field) {
            if (isset($this->mapArray[$field])) {
                return true;
            }
            return false;
        }

        public function getFieldValue($field) {
            if (isset($this->mapArray[$field])) {
                return $this->mapArray[$field];
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

