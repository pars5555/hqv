<?php

namespace admin\actions\observer {

    use admin\managers\ObserverManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use NGS;

    class ResetAction extends BaseAction {

        public function service() {
            $rowId = NGS()->args()->getRowId();
            ObserverManager::getInstance()->updateField($rowId, 'hash', '');
        }

        public function getRequestGroup() {
            return RequestGroups::$adminRequest;
        }

    }

}
