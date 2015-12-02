<?php

/**
 *
 * NGS custom session manager
 *
 * @abuthor Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package managers
 * @version 6.0
 *
 */

namespace obs\managers {

    use NGS;
    use ngs\framework\exceptions\InvalidUserException;
    use ngs\framework\session\NgsSessionManager;
    use obs\managers\UserManager;
    use obs\security\RequestGroups;
    use obs\security\UserGroups;
    use obs\security\users\GuestUser;
    use obs\security\users\NgsObserverUser;

    class SessionManager extends NgsSessionManager {

        private $user = null;

        public function __construct() {
            
        }

        /**
         * return ngs current logined or not
         * user object
         *
         * @return userObject
         */
        public function getUser() {
            if ($this->user != null) {
                return $this->user;
            }
            try {
                $user = $this->getUserByLevel(isset($_COOKIE["ut"])? : null);
                $user->validate();
            } catch (InvalidUserException $ex) {
                $this->deleteUser($user);
                NGS()->redirect(substr($_SERVER["REQUEST_URI"], 1));
                exit;
            }
            $this->user = $user;
            return $this->user;
        }

        /**
         * login ngs customer to system
         * set user hash and update user cookies
         *
         * @param userDto
         *
         * @return boolean
         */
        public function login($type, $id) {
            $user = $this->getUserByType($type);
            $user->login($id);
            $this->setUser($user, true, true);
            return true;
        }

        public function logout() {
            $this->deleteUser($this->getUser());
            return true;
        }

        /**
         * create and return user object by user level       
         * @return userObject
         */
        public function getUserByLevel($ut) {
            switch ($ut) {
                case UserGroups::$OBSERVER:
                    return new NgsObserverUser();
                default :
                    return new GuestUser();
            }
        }

        /**
         * create and return user object by user level text
         *
         * @param string $userType
         *
         * @return userObject
         */
        public function getUserByType($userType) {
            switch ($userType) {
                case UserGroups::$OBSERVER:
                    return new NgsObserverUser();
                case UserGroups::$GUEST :
                    return new GuestUser();
                default :
                    throw new InvalidUserException("user not found");
            }
        }

        public function getUserId() {
            if ($this->getUser() == null) {
                return null;
            }
            return $this->getUser()->getId();
        }

        public function getUserType() {
            if ($this->getUser() == null) {
                return null;
            }
            return $this->getUser()->getLevel();
        }

        /**
         * validate all ngs request
         * by user
         *
         * @param object $request
         *
         * @return userObject
         */
        public function validateRequest($request, $user = null) {
            if ($user == null) {
                $user = $this->getUser();
            }
            switch ($request->getRequestGroup()) {
                case RequestGroups::$observerRequest:
                    if ($user->getLevel() == UserGroups::$OBSERVER) {
                        return true;
                    }
                    break;
                case RequestGroups::$guestRequest:
                    return true;
                    break;
            }
            return false;
        }

        private function updateUserHash($uId) {
            $customerManager = UserManager::getInstance($this->config, null);
            return $customerManager->updateUserHash($uId);
        }

    }

}
