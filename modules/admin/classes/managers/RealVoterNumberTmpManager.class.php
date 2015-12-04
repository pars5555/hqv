<?php

/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package admin.managers
 * @version 1.0.0
 *
 */

namespace admin\managers {

    use admin\dal\mappers\RealVoterNumberTmpMapper;
    use hqv\managers\AdvancedAbstractManager;
    use hqv\managers\VoterManager;

    class RealVoterNumberTmpManager extends AdvancedAbstractManager {

        /**
         * @var singleton instance of class
         */
        private static $instance = null;

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new RealVoterNumberTmpManager(RealVoterNumberTmpMapper::getInstance());
            }
            return self::$instance;
        }

        public function revertObserverLastInput($areaId, $observerId) {
            $dtos = $this->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'observer_id', '=', $observerId, 'and', 'moderator_id', '=', '0'], ['create_datetime'], 'DESC');
            if (!empty($dtos)) {
                $rowToBeDeleted = $dtos[0];
                $createDatetime = $rowToBeDeleted->getCreateDatetime();
                $currentDatetime = date('Y-m-d H:i:s');
                $timeFirst = strtotime($currentDatetime);
                $timeSecond = strtotime($createDatetime);
                $deltaSeconds = $timeFirst - $timeSecond;
                if ($deltaSeconds <= 15) {
                    $this->deleteByPK($rowToBeDeleted->getId());
                    return true;
                }
            }
            return false;
        }

        public function addRow($voterNumberInArea, $observerId, $areaId) {
            $dto = $this->createDto();
            $dto->setAreaVoterId($voterNumberInArea);
            $dto->setCreateDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId(0);
            $dto->setObserverId($observerId);
            $dto->setAreaId($areaId);
            $listVoters = VoterManager::getInstance()->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'number', '=', $voterNumberInArea]);
            if (!empty($listVoters) && count($listVoters) === 1) {
                $voter = $listVoters[0];
                $dto->setVoterId($voter->getId());
            } else {

                $dto->setVoterId(0);
            }
            return $this->insertDto($dto);
        }

        public function mb_ucfirst($string, $encoding = "UTF-8") {
            $strlen = mb_strlen($string, $encoding);
            $firstChar = mb_substr($string, 0, 1, $encoding);
            $then = mb_substr($string, 1, $strlen - 1, $encoding);
            return mb_strtoupper($firstChar, $encoding) . $then;
        }

    }

}
