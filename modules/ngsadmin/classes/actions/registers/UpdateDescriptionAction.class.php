<?php

namespace ngsadmin\actions\registers {

    use ngsadmin\security\RequestGroups;
    use ngs\framework\AbstractAction;
    use ngs\framework\exceptions\NgsErrorException;
    use ngsadmin\managers\RegisterPagesManager;

    class UpdateDescriptionAction extends AbstractAction {

        public function service() {
            $id = NGS()->args()->getId();
            $description = NGS()->args()->getDesc();
            $page = NGS()->args()->getPage();
            $registerPagesManager = RegisterPagesManager::getInstance();
           $res = $registerPagesManager->updateDescription($page, $description);
           if(!$res){
               throw new NgsErrorException("Can't Save Description");
           }
            $this->addParam('page', $page);
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
