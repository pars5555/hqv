<?php

/**
 * UserMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with user table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

    use ngsadmin\dal\dto\UserDto;

    class UserMapper extends NgsAdminMapper {

        /**
         * @var table name in DB
         */
        private $tableName;

        /**
         * @var an instance of this class
         */
        private static $instance = null;

        /**
         * Initializes DBMS pointers and table name private class member.
         */
        function __construct() {
            // Initialize the dbms pointer.
            parent::__construct();

            // Initialize table name.
            $this->tableName = "users";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new UserMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new UserDto();
        }

        /**
         * @see AbstractMapper::getPKFieldName()
         */
        public function getPKFieldName() {
            return "id";
        }

        /**
         * @see AbstractMapper::getTableName()
         */
        public function getTableName() {
            return $this->tableName;
        }

        private $GET_USER_WITH_SKINS_USER = "SELECT `users`.*, `pharmacy`.`pharmacy_name`, GROUP_CONCAT(DISTINCT `skin_type`.`name`) AS `skin_type`, `user_professions`.`profession_name`,
                                         GROUP_CONCAT(DISTINCT `skin_problem`.`name`) AS `skin_problem`  
                                         FROM `users` INNER JOIN `pharmacy` ON `users`.`pharmacy_id` = `pharmacy`.`id` 
                                         LEFT JOIN `user_professions` ON `users`.`profession_id` = `user_professions`.`id` 
                                         LEFT JOIN `user_skin_type` ON `users`.id = `user_skin_type`.`user_id` 
                                         LEFT JOIN `skin_type` ON `skin_type`.id = `user_skin_type`.`skin_type_id` 
                                         LEFT JOIN `user_skin_problem` ON `users`.id = `user_skin_problem`.`user_id` 
                                         LEFT JOIN `skin_problem` ON `skin_problem`.id = `user_skin_problem`.`skin_problem_id` %s
                                         GROUP BY `users`.`id` ORDER BY %s %s LIMIT :offset, :limit";

        public function getUserWithSkinTypesAndSkinProblems($args) {
            if ($this->getOrderBy() == null) {
                $this->setOrderBy("id");
            }
            $params = array("offset" => $this->getOffset(), "limit" => $this->getLimit());
            $searchParamsTxt = "";
            if (is_array($args ["filter"]) && count($args ["filter"]) > 0) {
                $searchParamsTxt = " WHERE ";
                $delim = "";
            }

            foreach ($args["filter"] as $key => $value) {
                if ($key == "email" || $key == "mobile" || $key == "first_name" || $key == "last_name" || $key == "username" || $key == "address1" || $key == "address2" || $key == "city" || $key == "zip" || $key == "nationality") {
                    $searchParamsTxt .= $delim . "`users`.`" . $key . "` LIKE :" . $key . " ";
                    $params[$key] = "%" . $value . "%";
                }
                if ($key == "pharmacy_name") {
                    $searchParamsTxt .= $delim . "`pharmacy`.`" . $key . "` LIKE :" . $key . " ";
                    $params[$key] = "%" . $value . "%";
                }
                if ($key == "profession_name") {
                    $searchParamsTxt .= $delim . "`user_professions`.`" . $key . "` LIKE :" . $key . " ";
                    $params[$key] = "%" . $value . "%";
                }
                if ($key == "added_date") {
                    $key1 = 'added_date_from';
                    $key2 = 'added_date_to';
                    $searchParamsTxt .= $delim . "(`users`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                    $params[$key1] = $value->from;
                    $params[$key2] = $value->to;
                }
                if ($key == "birthdate") {
                    $key1 = 'birthdate_from';
                    $key2 = 'birthdate_to';
                    $searchParamsTxt .= $delim . "(`users`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                    $params[$key1] = $value->from;
                    $params[$key2] = $value->to;
                }
                if ($key == "skin_type") {
                    $sDelim = "";
                    $searchParamsTxt .= $delim . " (";
                    foreach ($value as $skey => $svalue) {
                        $searchParamsTxt .= $sDelim . " `user_skin_type`.skin_type_id=" . $svalue;
                        $sDelim = " OR ";
                    }
                    $searchParamsTxt .= ") ";
                }
                if ($key == "skin_problem") {
                    $sDelim = "";
                    $searchParamsTxt .= $delim . " (";
                    foreach ($value as $skey => $svalue) {
                        $searchParamsTxt .= $sDelim . " `user_skin_problem`.skin_problem_id=" . $svalue;
                        $sDelim = " OR ";
                    }
                    $searchParamsTxt .= ") ";
                }
                $delim = " AND ";
            }

            $sql = sprintf($this->GET_USER_WITH_SKINS_USER, $searchParamsTxt, "`users`." . $this->getOrderBy(), $this->getSortBy());

            $dtos = $this->fetchRows($sql, $params);
            if (count($dtos) != 0) {
                return $dtos;
            }
            return null;
        }

        private $GET_USER_COUNT = "SELECT COUNT(*) as count FROM (SELECT `users`.*, `pharmacy`.`pharmacy_name`, GROUP_CONCAT(DISTINCT `skin_type`.`name`) AS `skin_type`, `user_professions`.`profession_name`,
                                         GROUP_CONCAT(DISTINCT `skin_problem`.`name`) AS `skin_problem`  
                                         FROM `users` INNER JOIN `pharmacy` ON `users`.`pharmacy_id` = `pharmacy`.`id` 
                                         LEFT JOIN `user_professions` ON `users`.`profession_id` = `user_professions`.`id` 
                                         LEFT JOIN `user_skin_type` ON `users`.id = `user_skin_type`.`user_id` 
                                         LEFT JOIN `skin_type` ON `skin_type`.id = `user_skin_type`.`skin_type_id` 
                                         LEFT JOIN `user_skin_problem` ON `users`.id = `user_skin_problem`.`user_id` 
                                         LEFT JOIN `skin_problem` ON `skin_problem`.id = `user_skin_problem`.`skin_problem_id` %s
                                         GROUP BY `users`.`id` ORDER BY %s %s) as t ";

        public function getUserCount($args) {
            if ($this->getOrderBy() == null) {
                $this->setOrderBy("id");
            }
            $params = array();
            $searchParamsTxt = "";
            if (is_array($args ["filter"]) && count($args ["filter"]) > 0) {
                $searchParamsTxt = " WHERE ";
                $delim = "";

                foreach ($args["filter"] as $key => $value) {
                    if ($key == "email" || $key == "mobile" || $key == "first_name" || $key == "last_name" || $key == "username" || $key == "address1" || $key == "address2" || $key == "city" || $key == "zip" || $key == "nationality") {
                        $searchParamsTxt .= $delim . "`users`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "pharmacy_name") {
                        $searchParamsTxt .= $delim . "`pharmacy`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "profession_name") {
                        $searchParamsTxt .= $delim . "`user_professions`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "added_date") {
                        $key1 = 'added_date_from';
                        $key2 = 'added_date_to';
                        $searchParamsTxt .= $delim . "(`users`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }
                    if ($key == "birthdate") {
                        $key1 = 'birthdate_from';
                        $key2 = 'birthdate_to';
                        $searchParamsTxt .= $delim . "(`users`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }
                    if ($key == "skin_type") {
                        $sDelim = "";
                        $searchParamsTxt .= $delim . " (";
                        foreach ($value as $skey => $svalue) {
                            $searchParamsTxt .= $sDelim . " `user_skin_type`.skin_type_id=" . $svalue;
                            $sDelim = " OR ";
                        }
                        $searchParamsTxt .= ") ";
                    }

                    if ($key == "skin_problem") {
                        $sDelim = "";
                        $searchParamsTxt .= $delim . " (";
                        foreach ($value as $skey => $svalue) {
                            $searchParamsTxt .= $sDelim . " `user_skin_problem`.skin_problem_id=" . $svalue;
                            $sDelim = " OR ";
                        }
                        $searchParamsTxt .= ") ";
                    }
                    $delim = " AND ";
                }
            }

            $sql = sprintf($this->GET_USER_COUNT, $searchParamsTxt, "`users`." . $this->getOrderBy(), $this->getSortBy());
						
            $dto = $this->fetchRow($sql, $params);
            if (count($dto) != 0) {
                return $dto->getCount();
            }
            return null;
        }

        //   private $GET_USER_COUNT = "SELECT count(`users`.id) as count FROM `users` %s";
//    public function getUserCount($args) {
//      $searchParamsTxt = "";
//      $params = array();
//      if(is_array($this->getSearchParams())){
//        $sparams = $this->getSearchParams();
//        $searchParamsTxt = " WHERE `".$sparams["field"]."` LIKE :searchKey ";
//        $params["searchKey"] = "%".$sparams["value"]."%";
//      }
//      $sql = sprintf($this->GET_USER_COUNT, $searchParamsTxt);
//      $dto = $this->fetchRow($sql, $params);
//      if (count($dto) != 0) {
//        return $dto->getCount();
//      }
//      return null;
//    }
    }

}
