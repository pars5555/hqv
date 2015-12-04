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

    use admin\managers\RealVoterNumberManager;
    use admin\managers\RealVoterNumberTmpManager;
    use hqv\actions\BaseAction;

    class SyncRealVoterNumbersDataAction extends BaseAction {

        public function service() {
            set_time_limit(1000);
            $t = microtime(true);
            while (true) {
                $tmpRows = RealVoterNumberTmpManager::getInstance()->selectAdvance('*', ['synced', '=', '0', 'and',
                    'create_datetime', '<', "'" . date('Y-m-d H:i:s', strtotime('-16 seconds')) . "'"]);
                foreach ($tmpRows as $tmpRow) {
                    $areaVoterId = $tmpRow->getAreaVoterId();
                    $voterId = $tmpRow->getVoterId();
                    $areaId = $tmpRow->getAreaId();
                    $observerId = $tmpRow->getObserverId();
                    $datetime = $tmpRow->getCreateDatetime();
                    $rows = RealVoterNumberManager::getInstance()->selectAdvance('*', ['moderator_id', '=', 0, 'and', 'area_id', '=', $areaId,
                        'and', 'area_voter_id', '=', $areaVoterId, 'and', 'NOT', "FIND_IN_SET('$observerId',`observers_ids`)"]);
                    if (!empty($rows)) {
                        $row = $rows[0];
                        $observersIds = $row->getObserversIds();
                        $observersIdsArray = explode(',', $observersIds);
                        $observersIdsArray[] = $observerId;
                        $row->setObserversIds(implode(',', $observersIdsArray));
                        RealVoterNumberManager::getInstance()->updateByPK($row);
                    } else {
                        RealVoterNumberManager::getInstance()->addRowForObserver($areaVoterId, $voterId, $areaId, $observerId, $datetime);
                    }
                    RealVoterNumberTmpManager::getInstance()->updateField($tmpRow->getId(), 'synced', 1);
                }
                sleep(1);
                $deltaSeconds = microtime(true) - $t;
                if ($deltaSeconds > 58) {
                    break;
                }
            }
        }

    }

}
