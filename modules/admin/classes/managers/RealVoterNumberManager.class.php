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

    use admin\dal\mappers\RealVoterNumberMapper;
    use hqv\managers\AdvancedAbstractManager;
    use hqv\managers\VoterManager;

    class RealVoterNumberManager extends AdvancedAbstractManager {

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
                self::$instance = new RealVoterNumberManager(RealVoterNumberMapper::getInstance());
            }
            return self::$instance;
        }

        public function editRow($id, $voterNumberInArea, $moderatorId, $areaId) {

            $dto = $this->selectByPK($id);
            $dto->setAreaVoterId($voterNumberInArea);
            //$dto->setModeratorId($moderatorId);
            $dto->setAreaId($areaId);
            $listVoters = VoterManager::getInstance()->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'number', '=', $voterNumberInArea]);
            if (!empty($listVoters) && count($listVoters) === 1) {
                $voter = $listVoters[0];
                $dto->setVoterId($voter->getId());
            } else {

                $dto->setVoterId(0);
            }
            return $this->updateByPk($dto);
        }

        public function revertObserverLastInput($areaId) {
            $dtos = $this->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'moderator_id', '=', '0'], ['create_datetime'], 'DESC');
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

        public function addRowForObserver($voterNumberInArea, $voterId, $areaId, $observersIds, $datetime) {
            $dto = $this->createDto();
            $dto->setAreaVoterId($voterNumberInArea);
            $dto->setModeratorId(0);
            $dto->setObserversIds($observersIds);
            $dto->setAreaId($areaId);
            $dto->setVoterId($voterId);
            $dto->setCreateDatetime($datetime);
            return $this->insertDto($dto);
        }
        
        public function addRow($voterNumberInArea, $moderatorId, $areaId) {
            $dto = $this->createDto();
            $dto->setAreaVoterId($voterNumberInArea);
            $dto->setCreateDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId($moderatorId);
            $dto->setObserversIds('');
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

        public function getDuplicatedInListRealVotersRowIds($voterIds) {
            $duplicatedInListRealVoters = $this->mapper->getDuplicatedInListRealVoters($voterIds);
            $ret = [];
            foreach ($duplicatedInListRealVoters as $duplicatedInListRealVoter) {
                $duplicationIds = explode(',', $duplicatedInListRealVoter->getDuplicationIds());
                foreach ($duplicationIds as $duplicationId) {
                    $ret[] = $duplicationId;
                }
            }
            return $ret;
        }

        /**
         * For PassAnalyze Page
         */
        public function getDuplicatedRealVotersCount() {
            return $this->mapper->getDuplicatedRealVotersCount();
        }

        /**
         * For PassAnalyze Page
         */
        public function getDuplicatedRealVoters($offset, $limit) {
            return $this->mapper->getDuplicatedRealVoters($offset, $limit);
        }

        /**
         * For Dashboard Page
         */
        public function getDuplicationVotesVoterIdCount() {
            return $this->mapper->getDuplicationVotesVoterIdCount();
        }

        /**
         * For Dashboard Page
         */
        public function getTotalValidVotesCount() {
            return $this->countAdvance(['invalid', '=', 0]);
        }

        /**
         * For Dashboard Page
         */
        public function getTotalValidVotesCountInAreaIds($areaIds) {
            $areaIdsForSql = '(' . implode(',', $areaIds) . ')';
            return $this->countAdvance(['invalid', '=', 0, 'and', 'area_id', 'in', $areaIdsForSql]);
        }

        /**
         * For Dashboard Page
         */
        public function getTotalDuplicationVotesSum() {
            return $this->mapper->getTotalDuplicationVotesSum();
        }

        /**
         * For Dashboard Page
         */
        public function getTotalNonDuplicationButFakeVotesCount() {
            return $this->mapper->getTotalNonDuplicationButFakeVotesCount();
        }

    }

}
