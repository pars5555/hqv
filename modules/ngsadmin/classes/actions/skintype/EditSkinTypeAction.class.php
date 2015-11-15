<?php

namespace ngsadmin\actions\skintype {


use ngs\framework\AbstractAction;
use ngsadmin\security\RequestGroups;

  class EditSkinTypeAction extends AbstractAction {

    public function service() {
        
       $id = NGS()->args()->getId();
       $description = NGS()->args()->getDescription();
        $updateDescription = \ngsadmin\managers\SkinTypeManager::getInstance()->updateDescription($id,$description);
       if(!$updateDescription){
           throw  new \ngs\framework\exceptions\NgsErrorException('Edit Not Complete');
       }
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
