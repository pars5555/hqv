<?php

/**
 * QuizMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with quiz table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

use ngsadmin\dal\dto\UserWishlistDto;
use ngs\framework\dal\mappers\AbstractMapper;

    class UserWishlistMapper extends TableAbstractMapper {

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
            $this->tableName = "user_wishlist";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new UserWishlistMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new UserWishlistDto();
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

        private static $GET_USER_AVAILABLE_QUIZES = "SELECT quiz.* FROM quiz 
													WHERE id NOT IN 
													  (SELECT quiz.id FROM user_quiz_attempt 
													    INNER JOIN quiz 
													      ON user_quiz_attempt.quiz_id = quiz.id 
													  WHERE user_quiz_attempt.user_id = %d 
													    AND user_quiz_attempt.status = 'completed') 
													  ORDER BY quiz.start_date DESC, quiz.added_date DESC";

        public function getUserAvailableQuizes($userId) {
            $sql = sprintf(self::$GET_USER_AVAILABLE_QUIZES, $userId);
            return $this->fetchRows($sql);
        }

    }

}
