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

namespace hqv\actions\cron {

    use hqv\actions\BaseAction;
    use hqv\managers\EmergencyPhoneNumberManager;
    use hqv\managers\SettingManager;
    use hqv\managers\VoterDataManager;

    class SyncPrevoteDataAction extends BaseAction {

        public function service() {
            $lastRowId = $this->getSetting('prevote_data_last_row_id');
            $emLastRowId = $this->getSetting('emergency_last_row_id');
            if (empty($lastRowId)) {
                $lastRowId = 0;
            }
            if (empty($emLastRowId)) {
                $emLastRowId = 0;
            }
            $json = @file_get_contents('http://hanraqve.com/sync/getSyncData?pasphrase=P@rs1985&row_id=' . $lastRowId . '&em_row_id=' . $emLastRowId);
            $data = json_decode($json);
            $lastRowId = null;
            if (!empty($data) && !empty($data->params) && !empty($data->params->data)) {
                foreach ($data->params->data as $row) {
                    $dto = VoterDataManager::getInstance()->selectByPK($row->id);
                    if (!$dto) {
                        VoterDataManager::getInstance()->addSystemRow($row->id, $row->voter_id, $row->email, $row->phone, $row->will_vote, $row->will_be_in_arm, $row->is_death, $row->ip_address, $row->country, $row->browser, $row->browser_version, $row->platrom, $row->datetime);
                    }
                    $lastRowId = $row->id;
                }
            }
            if (isset($lastRowId) && $lastRowId > 0) {
                SettingManager::getInstance()->setSetting('prevote_data_last_row_id', $lastRowId);
            }


            $emLastRowId = null;
            if (!empty($data) && !empty($data->params) && !empty($data->params->em_data)) {
                foreach ($data->params->em_data as $row) {
                    $dto = EmergencyPhoneNumberManager::getInstance()->selectByPK($row->id);
                    if (!$dto) {
                        EmergencyPhoneNumberManager::getInstance()->addSystemRow($row->id, $row->phone_number, $row->ip_address, $row->datetime);
                    }
                    $emLastRowId = $row->id;
                }
            }
            if (isset($emLastRowId) && $emLastRowId > 0) {
                SettingManager::getInstance()->setSetting('emergency_last_row_id', $emLastRowId);
            }
        }

    }

}
