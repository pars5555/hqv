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
namespace admin\managers {

use admin\managers\UserManager;
use admin\security\RequestGroups;
use admin\security\UserGroups;
use admin\security\users\GuestUser;
use admin\security\users\NgsAdminUser;
use hqv\security\users\GuestUser as GuestUser2;
use NGS;
use ngs\framework\exceptions\InvalidUserException;
use ngs\framework\session\NgsSessionManager;

  class SessionManager extends NgsSessionManager {

    private $user = null;

    private $customerManager;
    private $adminManager;

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
        if (!isset($_COOKIE["but"])) {
          $user = new GuestUser2();
          $user->register();
          $this->setUser($user, true, true);
        } else {
          $user = $this->getUserByLevel($_COOKIE["but"]);
        }
        $user->validate();
      } catch(InvalidUserException $ex) {
        $this->deleteUser($user);
        NGS()->redirect(substr($_SERVER["REQUEST_URI"], 1));
        exit ;
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
    public function login($userDto) {
      $user = $this->getUserByType($userDto->getUserLevel());
      $user->login($userDto->getId());
      $this->setUser($user, true, true);
      return true;
    }

    public function logout() {
      $this->deleteUser($this->getUser());
      return true;
    }

    /**
     * create and return user object by user level
     *
     * @param bool $but
     *
     * @return userObject
     */
    public function getUserByLevel($but) {
      switch ($but) {
        case UserGroups::$NGSADMIN :
          return new NgsAdminUser();
          break;
        case UserGroups::$GUEST :
          return new GuestUser();
          break;
        default :
          throw new InvalidUserException("user not found");
          break;
      }
    }

    /**
     * create and return user object by user level text
     *
     * @param string $but
     *
     * @return userObject
     */
    public function getUserByType($but) {
      switch ($but) {
        case "ngsadmin" :
          return new NgsAdminUser();
          break;
        case UserGroups::$GUEST :
          return new GuestUser();
          break;
        default :
          throw new InvalidUserException("user not found");
          break;
      }
    }

    public function getUserId() {
      if ($this->getUser() == null) {
        return null;
      }
      return $this->getUser()->getId();
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
        case RequestGroups::$adminRequest :
          if ($user->getLevel() == UserGroups::$NGSADMIN) {
            return true;
          }
          break;
        case RequestGroups::$guestRequest :
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
