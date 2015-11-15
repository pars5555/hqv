<?php

namespace ngsadmin\actions\users {

  use ngsadmin\managers\OrderHistoryManager;
  use ngsadmin\managers\UserManager;
  use bclub\managers\UserSkinTypeManager;
  use bclub\managers\UserSkinProblemManager;
  use bclub\managers\SkinProblemManager;
  use bclub\managers\SkinTypeManager;
  use ngsadmin\security\RequestGroups;
  use ngs\framework\AbstractAction;
  use ngs\framework\exceptions\NgsErrorException;
  


  class DeleteUserAction extends AbstractAction {

    public function service() {
      
      if(!NGS()->args()->getItemId()){
        throw new NgsErrorException("Wrong User ID!");
      }
      $userId = NGS()->args()->getItemId();
      UserSkinTypeManager::getInstance()->deleteUserSkinTypes($userId);
      UserSkinProblemManager::getInstance()->deleteUserProblems($userId);
      UserManager::getInstance()->deleteUserById($userId);
      OrderHistoryManager::getInstance()->deleteOrderHistoryByUserId($userId);
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
