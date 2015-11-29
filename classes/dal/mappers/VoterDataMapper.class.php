<?php

/**
 *
 * Mysql mapper class is extended class from AbstractMysqlMapper.
 * It contatins all read and write functions which are working with its table.
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2015
 * @package crm.dal.mappers
 * @version 2.0.0
 *
 */

namespace hqv\dal\mappers {

    use hqv\dal\dto\VoterDataDto;

    class VoterDataMapper extends AdvancedAbstractMysqlMapper {

        private static $instance;
        public $tableName = "voter_data";

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new VoterDataMapper();
            }
            return self::$instance;
        }

        public function createDto() {
            return new VoterDataDto();
        }

        public function getPKFieldName() {
            return "id";
        }

        public function getTableName() {
            return $this->tableName;
        }

        public function getDuplicatedOrDeathData($offset, $limit) {
            $sql = "SELECT   * FROM (
                SELECT   *,  COUNT(*) AS vote_count, GROUP_CONCAT(id) AS duplication_ids  FROM  `%s` WHERE invalid = 0 GROUP BY voter_id HAVING vote_count > 1 
                UNION 
                SELECT   *,  1 AS vote_count, id AS duplication_ids  FROM `%s` WHERE is_death=1 AND invalid = 0
                ) AS sss
                ORDER BY vote_count DESC LIMIT %d, %d";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName(), $offset, $limit);
            return $this->fetchRows($sqlQuery);
        }

        public function getDuplicatedOrDeathDataCount() {
            $sql = "SELECT   count(*) as `count` FROM (
                SELECT   *,  COUNT(*) AS vote_count, GROUP_CONCAT(id) AS duplication_ids  FROM  `%s` WHERE invalid = 0 GROUP BY voter_id HAVING vote_count > 1 
                UNION 
                SELECT   *,  1 AS vote_count, id AS duplication_ids  FROM `%s` WHERE is_death=1 AND invalid = 0
                ) AS sss
                ";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName());
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function selectJoinVotersCount($where) {
            $sql = "SELECT count(`%s`.id) as `count` FROM `%s` LEFT JOIN `voters` ON `voters`.`id` = `%s`.voter_id %s";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName(), $this->getTableName(), $where);
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function selectJoinVoters($where, $offset, $limit) {
            $sql = "SELECT *,`%s`.`id` as `id`  FROM   `%s` LEFT JOIN `voters` ON `voters`.`id` = `%s`.voter_id %s ORDER BY `%s`.id DESC LIMIT %d,%d";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName(), $this->getTableName(), $where, $this->getTableName(), $offset, $limit);
            return $this->fetchRows($sqlQuery);
        }

        public function getNonParticipantCounts() {
            $sql = "SELECT COUNT(will_vote) AS `count` FROM                 
                            (SELECT `m1`.* 
                            FROM `%s` m1 LEFT JOIN `%s` m2
                             ON (m1.`voter_id` = m2.`voter_id` AND m1.id < m2.id)
                            WHERE m2.id IS NULL AND m1.will_vote=0
                             )  AS fff";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName());
            return $this->fetchField($sqlQuery, 'count');
        }

        public function getParticipantCounts() {
            $sql = "SELECT COUNT(will_vote) AS `count` FROM                 
                            (SELECT `m1`.* 
                            FROM `%s` m1 LEFT JOIN `%s` m2
                             ON (m1.`voter_id` = m2.`voter_id` AND m1.id < m2.id)
                            WHERE m2.id IS NULL AND m1.will_vote=1
                             )  AS fff";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName());
            return $this->fetchField($sqlQuery, 'count');
        }

        public function getDataCountGroupByVoterId() {
            $sql = "SELECT COUNT(*) as `count` FROM (SELECT id FROM `%s` GROUP BY `voter_id`) AS aaa";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return $this->fetchField($sqlQuery, 'count');
        }

    }

}
