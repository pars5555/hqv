<?php

/**
 * AdminMapper class is extended class from AbstractMapper.
 * It contatins all read and write functions which are working with admin table.
 *
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.dal.mappers
 * @version 1.0.0
 *
 */

namespace admin\dal\mappers {

    use admin\dal\dto\RealVoterPassportDto;
    use hqv\dal\mappers\AdvancedAbstractMysqlMapper;
    use ngs\framework\dal\mappers\AbstractMapper;

    class RealVoterPassportMapper extends AdvancedAbstractMysqlMapper {

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
            $this->tableName = "real_voter_passport";
        }

        /**
         * Returns an singleton instance of this class
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new RealVoterPassportMapper();
            }
            return self::$instance;
        }

        /**
         * @see AbstractMapper::createDto()
         */
        public function createDto() {
            return new RealVoterPassportDto();
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

        public function getDuplicatedRealVoters($offset, $limit) {
            $sql = "SELECT   * FROM (
                SELECT   *,  COUNT(*) AS vote_count, GROUP_CONCAT(id) AS duplication_ids  FROM  `%s` WHERE invalid = 0 GROUP BY first_name,  last_name,  father_name,  birth_date HAVING vote_count > 1 
                UNION 
                SELECT     *,    COUNT(*) AS vote_count, GROUP_CONCAT(id) AS duplication_ids  FROM    `%s`   WHERE (voter_id = 0       OR in_area_list = 0)     AND invalid = 0   GROUP BY first_name,    last_name,    father_name,    birth_date   HAVING vote_count = 1
                ) AS sss
                ORDER BY vote_count DESC LIMIT %d, %d";
            $sqlQuery = sprintf($sql, $this->getTableName(), $this->getTableName(), $offset, $limit);
            return $this->fetchRows($sqlQuery);
        }

        public function getDuplicatedRealVotersCount() {
            $sql = "SELECT  count(*) as `count` FROM (
                SELECT   *,  COUNT(*) AS vote_count FROM  `%s` WHERE invalid = 0 GROUP BY first_name,  last_name,  father_name,  birth_date HAVING vote_count > 1 
                UNION 
                SELECT     *,    COUNT(*) AS vote_count   FROM    `%s`   WHERE (voter_id = 0       OR in_area_list = 0)     AND invalid = 0   GROUP BY first_name,    last_name,    father_name,    birth_date   HAVING vote_count = 1
                ) AS sss    ";
            $sqlQuery = sprintf($sql, $this->getTableName(),$this->getTableName());
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function getTotalDuplicationVotesSum() {
            $sql = "SELECT SUM(vote_count) as `sum` FROM "
                    . "(SELECT COUNT(*) AS vote_count  FROM  `%s`  WHERE invalid=0 GROUP BY first_name,  last_name,  father_name,  birth_date HAVING vote_count > 1 ) AS al";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return intval($this->fetchField($sqlQuery, 'sum'));
        }

        public function getTotalNonDuplicationButFakeVotesCount() {
            $sql = "SELECT COUNT(*) as count FROM (SELECT  *,  COUNT(*) AS vote_count  FROM  `%s`   "
                    . "WHERE (voter_id = 0 OR in_area_list = 0) AND invalid=0 GROUP BY first_name,  last_name,  father_name,  birth_date HAVING vote_count = 1) as al";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function getDuplicationVotesVoterIdCount() {
            $sql = "SELECT COUNT(*) as `count` FROM "
                    . "(SELECT COUNT(*) AS vote_count FROM  `%s`   "
                    . "WHERE voter_id >0  AND invalid=0 GROUP BY first_name,  last_name,  father_name,  birth_date HAVING vote_count > 1 ) AS al";
            $sqlQuery = sprintf($sql, $this->getTableName());
            return intval($this->fetchField($sqlQuery, 'count'));
        }

        public function getDuplicatedInListRealVoters($voterIds) {
            $voterIds[] = 0;
            $sql = "SELECT *, COUNT(*)  AS vote_count, GROUP_CONCAT(id) AS duplication_ids  FROM `%s` "
                    . "WHERE voter_id IN (%s) AND invalid=0 GROUP BY voter_id, first_name, last_name, father_name, birth_date HAVING vote_count > 1 ORDER BY vote_count DESC";
            $sqlQuery = sprintf($sql, $this->getTableName(), implode(',', $voterIds));
            return $this->fetchRows($sqlQuery);
        }

    }

}
