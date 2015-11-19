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

    use admin\dal\mappers\AdminMapper;
    use admin\dal\mappers\ObserverMapper;
    use ngs\framework\AbstractManager;

    class ObserverManager extends AbstractManager {

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
                self::$instance = new ObserverManager();
            }
            return self::$instance;
        }

        /**
         * gets admin by username and password
         *
         * @param string $username
         * @param string $password
         */
        public function getByUsernamePassword($username, $password) {
            return ObserverMapper::getInstance()->getByUsernamePassword($username, md5($password));
        }

        /**
         * get user by id and hash
         *
         * @param int $userId
         * @param string $hash
         */
        public function validate($userId, $hash) {
            return ObserverMapper::getInstance()->validateUser($userId, $hash);
        }

        /**
         * do login user update hash and last login date
         *
         * @param int $userId
         * @return boolean
         */
        public function loginUser($userId) {
            $userHash = md5(time() . $userId);
            $dto = AdminMapper::getInstance()->createDto();
            $dto->setId($userId);
            $dto->setHash($userHash);
            $dto->setLastLogin(date('Y-m-d H:i:s'));
            ObserverMapper::getInstance()->updateByPK($dto);
            return $userHash;
        }

    }

}
