<?php

/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.managers
 * @version 1.0.0
 *
 */

namespace admin\managers {

    class AnalyzeManager {

        private static $instance = null;

        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new AnalyzeManager();
            }
            return self::$instance;
        }

        /**
         * For PassAnalyze Page
         * @param type $offset
         * @param type $limit
         * @return type
         */
        public function getDuplicatedPassportRealVoters($offset, $limit) {
            return RealVoterPassportManager::getInstance()->getDuplicatedRealVoters($offset, $limit);
        }

        /**
         * For PassAnalyze Page
         * @param type $offset
         * @param type $limit
         * @return type
         */
        public function getDuplicatedPassportRealVotersCount() {
            return RealVoterPassportManager::getInstance()->getDuplicatedRealVotersCount();
        }

        /**
         * For NumAnalyze Page
         * @param type $offset
         * @param type $limit
         * @return type
         */
        public function getDuplicatedNumberRealVoters() {
            return RealVoterNumberManager::getInstance()->getDuplicatedRealVoters();
        }

        /**
         * For Dashboard Page
         */
        public function getTotalPassportDuplicationVotes() {
            $totalDuplicationVotes = RealVoterPassportManager::getInstance()->getTotalDuplicationVotes();
            $duplicationVotesVoterIdCount = RealVoterPassportManager::getInstance()->getDuplicationVotesVoterIdCount();
            return intval($totalDuplicationVotes) - intval($duplicationVotesVoterIdCount);
        }

        /**
         * For Dashboard Page
         */
        public function getTotalNumberDuplicationVotes() {
            $totalDuplicationVotes = RealVoterNumberManager::getInstance()->getTotalDuplicationVotes();
            $duplicationVotesVoterIdCount = RealVoterNumberManager::getInstance()->getDuplicationVotesVoterIdCount();
            return intval($totalDuplicationVotes) - intval($duplicationVotesVoterIdCount);
        }

    }

}
