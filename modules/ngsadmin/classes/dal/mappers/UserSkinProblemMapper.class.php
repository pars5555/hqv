<?php

/**
 * UserQuizAnswerMapper class is extended class from TableAbstractMapper.
 * It contatins all read and write functions which are working with user_quiz_answer table.
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 *
 */

namespace ngsadmin\dal\mappers {

    use ngsadmin\dal\dto\UserSkinProblemDto;
    use ngs\framework\dal\mappers\AbstractMapper;

    class UserSkinProblemMapper extends TableAbstractMapper {

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
            $this->tableName = "user_skin_problem";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new UserSkinProblemMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new UserSkinProblemDto();
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

        private static $GET_USER_QUIZ_ATTEMPT_LAST_ANSWERED_QUESTION = "SELECT * FROM %s WHERE user_quiz_attempt_id=%d ORDER BY answer_date DESC LIMIT 0,1";

        public function getUserQuizAttemptLastAnsweredQuestion($userQuizAttemptId) {
            $sql = sprintf(self::$GET_USER_QUIZ_ATTEMPT_LAST_ANSWERED_QUESTION, $this->getTableName(), $userQuizAttemptId);
            $dtos = $this->fetchRows($sql);
            if (count($dtos) == 1) {
                return $dtos[0];
            }
            return null;
        }

        private static $GET_USER_OVERALL_SCORE = "SELECT 
												  SUM(quiz_question.`score`) AS score 
												FROM
												  `user_quiz_answer` 
												  INNER JOIN `user_quiz_attempt` 
												    ON user_quiz_attempt.`id` = user_quiz_answer.`user_quiz_attempt_id` 
												    INNER JOIN `quiz_question` ON quiz_question.`id`=`user_quiz_answer`.`question_id`
												WHERE user_quiz_attempt.user_id = %d 
												  AND user_quiz_answer.is_correct = 1 ";

        public function getUserOverallScore($userId) {
            $sql = sprintf(self::$GET_USER_OVERALL_SCORE, $userId);
            $score = intval($this->fetchField($sql, 'score'));
            return $score;
        }

        public function getUserMonthlyScore($userId) {
            $sql = sprintf(self::$GET_USER_OVERALL_SCORE, $userId);
            $sql .= "AND user_quiz_answer.answer_date > DATE_SUB(NOW(),INTERVAL 1 MONTH)";
            $score = intval($this->fetchField($sql, 'score'));
            return $score;
        }

        private static $GET_USER_QUIZ_ANSWERS = "SELECT user_quiz_answer.*,quiz_question.score FROM
											  user_quiz_answer 
											  INNER JOIN user_quiz_attempt 
											    ON user_quiz_attempt.id = user_quiz_answer.user_quiz_attempt_id
										      INNER JOIN quiz_question 
    											ON quiz_question.id = user_quiz_answer.question_id 
											WHERE user_quiz_attempt.user_id=%d AND user_quiz_attempt.quiz_id=%d";

        public function getUserQuizAnswers($userId, $quizId) {
            $sql = sprintf(self::$GET_USER_QUIZ_ANSWERS, $userId, $quizId);

            $res = $this->dbms->query($sql);

            $resultArr = array();
            if ($res && $this->dbms->getResultCount($res) > 0) {
                $results = $this->dbms->getResultArray($res);
                foreach ($results as $result) {
                    $dto = $this->createDto();
                    $this->initializeDto($dto, $result);
                    $dto->setScore($result['score']);
                    $resultArr[] = $dto;
                }
            }
            return $resultArr;
        }

        private static $GET_USER_QUIZ_QUESTIONS_AND_ANSWERS_BY_ATTEMPT_ID = "SELECT 
																		 	%s.*,%s,%s
																		FROM
																		  user_quiz_answer 
																		  INNER JOIN quiz_question 
																		    ON quiz_question.`id` = user_quiz_answer.`question_id` 
																		  INNER JOIN quiz_answer 
																		    ON quiz_answer.`id` = user_quiz_answer.`answer_id` 
																		WHERE user_quiz_attempt_id = %d 
																		ORDER BY quiz_question.position ";

        public function getUserQuizQuestionsAndAnswersByAttemptId($quizAttemptId) {
            $quizQuestionMapper = QuizQuestionMapper::getInstance();
            $quizAnswerMapper = QuizAnswerMapper::getInstance();
            $quizQuestionFields = $quizQuestionMapper->getAllFieldsAsQueryString(true);
            $quizAnswerFields = $quizAnswerMapper->getAllFieldsAsQueryString(true);

            $sql = sprintf(self::$GET_USER_QUIZ_QUESTIONS_AND_ANSWERS_BY_ATTEMPT_ID, $this->getTableName(), $quizQuestionFields, $quizAnswerFields, $quizAttemptId);
            $res = $this->dbms->query($sql);
            $resultArr = array();
            if ($res && $this->dbms->getResultCount($res) > 0) {
                $results = $this->dbms->getResultArray($res);
                foreach ($results as $result) {
                    $dto = $this->createDto();
                    $questionDto = $quizQuestionMapper->createDto();
                    $answerDto = $quizAnswerMapper->createDto();

                    $this->initializeDto($dto, $result);
                    $quizQuestionMapper->initializeDto($questionDto, $result, true);
                    $quizAnswerMapper->initializeDto($answerDto, $result, true);

                    $dto->setQuestion($questionDto);
                    $dto->setAnswer($answerDto);
                    $resultArr[] = $dto;
                }
            }
            return $resultArr;
        }

        private static $DELETE_USER_QUIZ_ANSWERS_BY_ATTEMPT_ID = "DELETE FROM %s WHERE user_quiz_attempt_id=%d";

        public function deleteUserQuizAnswersByAttemptId($attemptId) {
            $sql = sprintf(self::$DELETE_USER_QUIZ_ANSWERS_BY_ATTEMPT_ID, $this->getTableName(), $attemptId);
            $res = $this->dbms->query($sql);
            if ($res) {
                $result = $this->dbms->getAffectedRows();
                return $result;
            }
            return -1;
        }

    }

}
