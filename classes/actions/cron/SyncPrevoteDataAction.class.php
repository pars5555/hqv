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
    use hqv\managers\SettingManager;
    use hqv\managers\VoterDataManager;

    class SyncPrevoteDataAction extends BaseAction {

        public function service() {
            $lastRowId = $this->getSetting('prevote_data_last_row_id');
            if (!empty($lastRowId)) {
                $json = @file_get_contents('http://hanraqve.com/sync/getSyncData?pasphrase=P@rs1985&row_id=' . $lastRowId);
            } else {
                $json = @file_get_contents('http://hanraqve.com/sync/getSyncData?pasphrase=P@rs1985');
            }
            $data = json_decode($json);
            $lastRowId = null;
            if (!empty($data) && !empty($data->params) && !empty($data->params->data)) {
                foreach ($data->params->data as $row) {
                    $dto = VoterDataManager::getInstance()->selectByPK($row->id);
                    if (!$dto) {
                        VoterDataManager::getInstance()->addSystemRow($row->id, $row->voter_id, $row->email, $row->phone, $row->will_vote, $row->will_be_in_arm, $row->ip_address, $row->country, $row->browser, $row->browser_version, $row->platrom, $row->datetime);
                    }
                    $lastRowId = $row->id;
                }
            }
            if (isset($lastRowId) && $lastRowId > 0) {
                SettingManager::getInstance()->setSetting('prevote_data_last_row_id', $lastRowId);
            }
        }

    }

}
