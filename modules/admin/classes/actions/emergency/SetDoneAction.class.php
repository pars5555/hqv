<?php

namespace admin\actions\emergency {

    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use hqv\managers\EmergencyPhoneNumberManager;
    use NGS;

    class SetDoneAction extends BaseAction {

        public function service() {
            $rowId = NGS()->args()->getRowId();
            $done = NGS()->args()->getDone();
            EmergencyPhoneNumberManager::getInstance()->updateField($rowId, 'is_done', $done);
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
