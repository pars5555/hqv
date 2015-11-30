<?php

namespace admin\actions\emergency {

    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use hqv\managers\EmergencyPhoneNumberManager;
    use NGS;

    class SetNoteAction extends BaseAction {

        public function service() {
            $rowId = NGS()->args()->getRowId();
            $note = NGS()->args()->getNote();
            EmergencyPhoneNumberManager::getInstance()->updateField($rowId, 'note', $note);
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
