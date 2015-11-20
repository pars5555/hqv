<?php

namespace admin\actions\passport {

    use admin\managers\RealVoterPassportManager;
    use admin\security\RequestGroups;
    use hqv\actions\BaseAction;
    use NGS;

    class SetInvalidVoteAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $rowId = intval(NGS()->args()->rowId);
            $invalid = intval(NGS()->args()->invalid);
            RealVoterPassportManager::getInstance()->updateField($rowId, 'invalid', $invalid);
            if (NGS()->args()->note) {
                RealVoterPassportManager::getInstance()->updateField($rowId, 'invalid_note', NGS()->args()->note);
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$moderatorRequest;
        }

    }

}
