<?php

namespace ngsadmin\actions\registers {

    use ngsadmin\security\RequestGroups;
    use ngs\framework\AbstractAction;
    use ngs\framework\exceptions\NgsErrorException;
    use ngsadmin\managers\RegisterPagesManager;

    class DeleteImageAction extends AbstractAction {

        public function service() {
            $id = NGS()->args()->getId();
            $path = NGS()->args()->getPath();
            $page = NGS()->args()->getPage();
            $registerManager = RegisterPagesManager::getInstance();
            $deleteRes = $registerManager->deleteImageFromPage($id, $path);
            if (!$deleteRes) {
                throw new \ngs\framework\exceptions\NgsErrorException("Can't Remove Image Please Try Later");
            }
            $this->addParam('page', $page);
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
