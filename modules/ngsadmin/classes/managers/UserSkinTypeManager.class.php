<?php
namespace ngsadmin\managers {

  use ngsadmin\dal\mappers\UserMapper;
  use ngs\framework\AbstractManager;

  class UserSkinTypeManager extends AbstractManager {

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
        self::$instance = new UserSkinTypeManager();
      }
      return self::$instance;
    }
    
    public function updateUserSkinTypes($userId, $skinTypes){
      return \bclub\dal\mappers\UserSkinTypeMapper::getInstance()->updateUserSkinTypes($userId, $skinTypes);
    }
    
  }

}
