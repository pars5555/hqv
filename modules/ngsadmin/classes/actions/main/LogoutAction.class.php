<?php

namespace ngsadmin\actions\main {

  use ngsadmin\managers\AdminManager;
  use ngsadmin\security\RequestGroups;
  use ngs\framework\AbstractAction;
  use ngs\framework\exceptions\NgsErrorException;

  /**
   * @author Vahagn Kirakosyan
   */
  class LogoutAction extends AbstractAction {

    public function service() {
      NGS()->getSessionManager()->logout();
      $this->redirect('login');
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
