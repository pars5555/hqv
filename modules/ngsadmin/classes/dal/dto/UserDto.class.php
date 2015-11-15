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
    use ngsadmin\managers\PharmacyManager;

    class UserDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id",
            "username" => "username",
            "first_name" => "firstName",
            "last_name" => "lastName",
            "password" => "password",
            "email" => "email",
            "gender" => "gender",
            "birthdate" => "birthdate",
            "nationality" => "nationality",
            "address1" => "address1",
            "address2" => "address2",
            "country_id" => "countryId",
            "city" => "city",
            "zip" => "zip",
            "register_page" => "registerPage", 
            "pharmacy_id" => "pharmacyId",
            "mobile" => "mobile",
            "profession_id" => "professionId",
            "temp_user_id" => "tempUserId",
            "user_id" => "userId",
            "find_bioderma" => "findBioderma",
            "securtiy_question_id" => "securtiyQuestionId",
            "security_question_answer" => "securtiyQuestionAnswer",
            "update_date" => "updateDate",
            "added_date" => "addedDate",
            "note" => "note"
        );

        // constructs class instance
        public function __construct() {
            
        }
        
        public function getBirthdate(){
          if(!isset($this->birthdate)){
            return false;
          }
          return date ("Y-m-d H:i:s", strtotime($this->birthdate));
        }
        public function checkField($field){
          if(isset($this->mapArray[$field])){
            return true;
          }
          return false;
        }
        public function getFieldValue($field){
          if(isset($this->mapArray[$field])){
            return $this->mapArray[$field];
          }
          return false;
        }
        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }
        
        public function getUserSkinType(){
          if(!isset($this->skin_type)){
            return explode(",", $this->skin_type);
          }
        }
        
        public function getUserSkinProblem(){
          if(!isset($this->skin_type)){
            return explode(",", $this->skin_problem);
          }
        }
        
    }

}