<?php

/**
 * UserQuizAttemptMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with user_quiz_attempt table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

    use ngsadmin\dal\dto\UserSkinTypeDto;
    use ngs\framework\dal\mappers\AbstractMapper;

    class UserSkinTypeMapper extends TableAbstractMapper {

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
            $this->tableName = "user_skin_type";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new UserSkinTypeMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new UserSkinTypeDto();
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

        private static $GET_USER_QUIZ_LAST_ATTEMPT = "SELECT * FROM %s WHERE user_id=%d AND quiz_id=%d ORDER BY attempt_number DESC LIMIT 0,1";

        public function getUserQuizLastAttempt($userId, $quizId) {
            $sql = sprintf(self::$GET_USER_QUIZ_LAST_ATTEMPT, $this->getTableName(), $userId, $quizId);
            $dtos = $this->fetchRows($sql);
            if (count($dtos) == 1) {
                return $dtos[0];
            }
            return null;
        }

        private static $COMPLETE_USER_QUIZ_ATTEMPT = "UPDATE %s SET status='completed' WHERE id=%d";

        public function completeUserQuizAttempt($userQuizAttemptId) {
            $sql = sprintf(self::$COMPLETE_USER_QUIZ_ATTEMPT, $this->getTableName(), $userQuizAttemptId);
            $res = $this->dbms->query($sql);
            if ($res) {
                $result = $this->dbms->getAffectedRows();
                return $result;
            }
            return -1;
        }

    }

}