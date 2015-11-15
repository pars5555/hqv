<?php

/**
 * UserProfileScoreMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with user_profile_score table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

    use ngsadmin\dal\dto\OrderHistoryDto;

    class OrderHistoryMapper extends NgsAdminMapper {

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
            $this->tableName = "user_order_history";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new OrderHistoryMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new OrderHistoryDto();
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

        public function deleteOrderHistoryByUserId($userId) {
            $sqlQuery = sprintf("DELETE FROM `%s` WHERE `user_id`=?", $this->getTableName());
            $res = $this->executeUpdate($sqlQuery, array($userId));
            if (is_numeric($res)) {
                return true;
            }
            return false;
        }

        private $GET_ORDER_HISTORY_DATA = "SELECT `user_order_history`.*, `products`.`title`,`pharmacy`.`pharmacy_name`,  CONCAT(`users`.`first_name`,' ',`users`.`last_name`) AS `user_name` 
                                        FROM `user_order_history` 
                                                  INNER JOIN `pharmacy` 
                                                  ON `user_order_history`.`pharmacy_id` = `pharmacy`.`id` 
                                                  INNER JOIN `products` 
                                                  ON `user_order_history`.`product_id` = `products`.`id` 
                                                  INNER JOIN `users` 
                                                  ON `user_order_history`.`user_id` = `users`.`id` %s
                                                  GROUP BY `user_order_history`.`id` 
                                                 ORDER BY %s %s LIMIT :offset, :limit";

        public function getOrderHistory($args) {
            if ($this->getOrderBy() == null) {
                $this->setOrderBy("id");
            }
            $params = array("offset" => $this->getOffset(), "limit" => $this->getLimit());
            $searchParamsTxt = "";
            if (is_array($args ["filter"]) && count($args ["filter"]) > 0) {
                $searchParamsTxt = " WHERE ";
                $delim = "";

                foreach ($args["filter"] as $key => $value) {
                    if ($key == "pharmacy_name") {
                        $searchParamsTxt .= $delim . "`pharmacy`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "product_name") {
                        $key = 'title';
                        $searchParamsTxt .= $delim . "`products`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "added_date") {
                        $key1 = 'added_date_from';
                        $key2 = 'added_date_to';
                        $searchParamsTxt .= $delim . "(`user_order_history`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }
                    if ($key == "order_date") {
                        $key1 = 'order_date_from';
                        $key2 = 'order_date_to';
                        $searchParamsTxt .= $delim . "(`user_order_history`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }

                    if ($key == "user_name") {
                        $key = 'first_name';
                        $key1 = 'last_name';
                        $searchParamsTxt .= $delim . "(`users`.`" . $key . "` LIKE :" . $key . " OR  `users`.`" . $key1 . "` LIKE :" . $key1 . " )";
                        $params[$key] = "%" . $value . "%";
                        $params[$key1] = "%" . $value . "%";
                    }
                    $delim = " AND ";
                }
            }

            $sql = sprintf($this->GET_ORDER_HISTORY_DATA, $searchParamsTxt, "`user_order_history`." . $this->getOrderBy(), $this->getSortBy());
            $dtos = $this->fetchRows($sql, $params);

            if (count($dtos) != 0) {
                return $dtos;
            }
            return null;
        }

        private $GET_ORDER_HISTORY_DATA_COUNT = "SELECT `user_order_history`.*, `products`.`title`,`pharmacy`.`pharmacy_name`,  CONCAT(`users`.`first_name`,' ',`users`.`last_name`) AS `user_name` 
                                        FROM `user_order_history` 
                                                  INNER JOIN `pharmacy` 
                                                  ON `user_order_history`.`pharmacy_id` = `pharmacy`.`id` 
                                                  INNER JOIN `products` 
                                                  ON `user_order_history`.`product_id` = `products`.`id` 
                                                  INNER JOIN `users` 
                                                  ON `user_order_history`.`user_id` = `users`.`id` %s
                                                  GROUP BY `user_order_history`.`id`";

        public function getOrderHistoryCount($args) {
            if ($this->getOrderBy() == null) {
                $this->setOrderBy("id");
            }
            $params = array();
            $searchParamsTxt = "";
            if (is_array($args ["filter"]) && count($args ["filter"]) > 0) {
                $searchParamsTxt = " WHERE ";
                $delim = "";

                foreach ($args["filter"] as $key => $value) {
                    if ($key == "pharmacy_name") {
                        $searchParamsTxt .= $delim . "`pharmacy`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    if ($key == "user_name") {
//                          to do 
                        $key = 'first_name';
                        $key1 = 'last_name';
                        $searchParamsTxt .=$delim . "(. `users`.`" . $key . "` LIKE :" . $key . " OR  `users`.`" . $key1 . "` LIKE :" . $key1 . " )";
                        $params[$key] = "%" . $value . "%";
                        $params[$key1] = "%" . $value . "%";
                    }
                       if ($key == "added_date") {
                        $key1 = 'added_date_from';
                        $key2 = 'added_date_to';
                        $searchParamsTxt .= $delim . "(`user_order_history`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }
                    if ($key == "order_date") {
                        $key1 = 'order_date_from';
                        $key2 = 'order_date_to';
                        $searchParamsTxt .= $delim . "(`user_order_history`.`" . $key . "` BETWEEN :" . $key1 . " AND :" . $key2 . ") ";
                        $params[$key1] = $value->from;
                        $params[$key2] = $value->to;
                    }

                    if ($key == "product_name") {
                        $key = 'title';
                        $searchParamsTxt .= $delim . "`products`.`" . $key . "` LIKE :" . $key . " ";
                        $params[$key] = "%" . $value . "%";
                    }
                    $delim = " AND ";
                }
            }

            $sql = sprintf($this->GET_ORDER_HISTORY_DATA_COUNT, $searchParamsTxt, "`user_order_history`." . $this->getOrderBy(), $this->getSortBy());

            $dtos = $this->fetchRows($sql, $params);

            if (count($dtos) != 0) {
                return count($dtos);
            }
            return null;
        }

    }

}