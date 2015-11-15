<?php

namespace ngsadmin\actions\main {

  use ngsadmin\managers\AdminManager;
  use ngsadmin\security\RequestGroups;
  use ngs\framework\AbstractAction;
  use ngs\framework\exceptions\NgsErrorException;

  /**
   * @author Vahagn Kirakosyan
   */
  class LoginAction extends AbstractAction {

    public function service() {
      $adminDto = AdminManager::getInstance()->getByUsernamePassword(NGS()->args()->getUsername(), NGS()->args()->getPassword());
      if(!$adminDto){
        throw new NgsErrorException("Incorrect Login/Password!");
      }
      NGS()->getSessionManager()->login($adminDto);
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
