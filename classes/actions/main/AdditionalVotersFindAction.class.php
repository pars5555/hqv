<?php

/**
 * main site action for all ngs site's actions
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2014
 * @package actions.site
 * @version 6.0
 *
 */

namespace hqv\actions\main {

    use hqv\actions\BaseAction;
    use hqv\managers\AdditionalVoterManager;
    use hqv\managers\VoterManager;

    class AdditionalVotersFindAction extends BaseAction {

        public function service() {
            set_time_limit(500000);
            $offset = 0;
            $limit = 5000;
            while (true) {
                $allData = AdditionalVoterManager::getInstance()->selectAdvance('*', [], [], null, $offset, $limit);
                if (empty($allData)) {
                    break;
                }
                $offset += $limit;
                foreach ($allData as $row) {
                    $birthDate = $row->getBirthDate();
                    $firstName = $row->getFirstName();
                    $lastName = $row->getLastName();
                    $fatherName = $row->getFatherName();
                    $voters = VoterManager::getInstance()->selectAdvance('*', [
                        'first_name', '=', "'$firstName'", 'and',
                        'last_name', '=', "'$lastName'", 'and',
                        'father_name', '=', "'$fatherName'", 'and',
                        'birth_date', '=', "'$birthDate'"
                    ]);
                    if (!empty($voters) && is_array($voters) && count($voters) === 1) {
                        $voter = $voters[0];
                        $voter->setCut(1);
                        $additionalVoterId = $row->getId();
                        $voter->setAdditionalVoterId($additionalVoterId);
                        VoterManager::getInstance()->updateByPK($voter);

                        $row->setVoterId($voter->getId());
                        AdditionalVoterManager::getInstance()->updateByPK($row);
                    }
                }
            }
            exit;
        }

    }

}
