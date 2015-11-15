<?php

namespace ngsadmin\actions\users {

  use ngsadmin\managers\UserManager;
  use bclub\managers\UserSkinTypeManager;
  use bclub\managers\UserSkinProblemManager;
  use bclub\managers\SkinProblemManager;
  use bclub\managers\SkinTypeManager;
  use ngsadmin\security\RequestGroups;
  use ngs\framework\AbstractAction;
  use ngs\framework\exceptions\NgsErrorException;
  


  class AddEditUserAction extends AbstractAction {

    public function service() {
      $userDto = UserManager::getInstance()->createDtoFromArgs(NGS()->args());
      if($userDto->getId()){
        $newUserDto = UserManager::getInstance()->getUserById($userDto->getId());
        if($newUserDto->getTempUserId()){
          $userDto->setStatus("merged");
          $userDto->setTempUserId("NULL");
        }
        UserManager::getInstance()->updateUser($userDto);
        if($newUserDto->getTempUserId()){
          UserManager::getInstance()->deleteTempUser($newUserDto->getTempUserId());
          UserSkinTypeManager::getInstance()->deleteTempUserSkinType($userDto->getId());
          UserSkinProblemManager::getInstance()->deleteTempUserProblems($userDto->getId());
        }
        
      }else{
        $userId = UserManager::getInstance()->addUser($userDto);
        $userDto->setId($userId);
      }
      $userSkinTypes = NGS()->args()->skin_type;
      UserSkinTypeManager::getInstance()->updateUserSkinTypes($userDto->getId(), $userSkinTypes);
      UserSkinProblemManager::getInstance()->updateUserProblems($userDto->getId(), NGS()->args()->skin_problem);
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
