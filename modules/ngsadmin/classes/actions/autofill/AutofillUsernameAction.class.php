<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions\autofill {

use bclub\security\RequestGroups;
use ngs\framework\AbstractAction;
use ngsadmin\managers\TableManager;

    class AutofillUsernameAction extends AbstractAction {

        function service() {
            $searchkey = NGS()->args()->searchkey;
            $tableManager = TableManager::getInstance();
            $tableManager->initMapperInstance($this->getTableName());
            $matchedArrayBySearchKey = $tableManager->getMatchedArrayBySearchKey($searchkey);
            $this->addParams($matchedArrayBySearchKey);
        }

        public function getTableName() {
            return "user";
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}