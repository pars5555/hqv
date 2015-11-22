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

    class RealVoterNumberDto extends AbstractDto {

        // Map of DB value to Field value
        protected $mapArray = array(
            "id" => "id",
            "area_voter_id" => "areaVoterId",
            "voter_id" => "voterId",
            "moderator_id" => "moderatorId",
            "create_datetime" => "createDatetime",
            "area_id" => "areaId",
            "invalid" => "invalid",
            "invalid_note" => "invalidNote",
           
            
            "duplication_ids" => "duplicationIds",
            "vote_count" => "voteCount"
            );

        // returns map array
        public function getMapArray() {
            return $this->mapArray;
        }

    }

}
