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

        /**
         * @var singleton instance of class
         */
        private static $instance = null;

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new AnalyzeManager();
            }
            return self::$instance;
        }

        public function getDuplicatedRealVoters() {
            return RealVoterPassportManager::getInstance()->getDuplicatedRealVoters();
        }

    }

}
