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

    class RealVoterDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id",
            "voter_id" => "voterId",
            "first_name" => "firstName",
            "last_name" => "lastName",
            "father_name" => "fatherName",
            "moderator_id" => "moderatorId",
            "create_datetime" => "createDatetime",
            "change_datetime" => "changeDatetime",
            "birth_date" => "birthDate",
            
            "duplication_ids" => "duplicationIds",
            "vote_count" => "voteCount"
            
            );

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }

    }

}
