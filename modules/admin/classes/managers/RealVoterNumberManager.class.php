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

        public function editRow($id, $voterNumber, $moderatorId, $areaId) {

            $dto = $this->selectByPK($id);
            $dto->setVoterId($voterNumber);
            //$dto->setModeratorId($moderatorId);
            $dto->setAreaId($areaId);
            $listVoters = VoterManager::getInstance()->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'number', '=', $voterNumber]);
            if (!empty($listVoters) && count($listVoters) === 1) {
                $voter = $listVoters[0];
                $dto->setExistInList(1);
            } else {
                $dto->setExistInList(0);
            }
            return $this->updateByPk($dto);
        }

        public function addRow($voterNumber, $moderatorId, $areaId) {
            $dto = $this->createDto();
            $dto->setVoterId($voterNumber);
            $dto->setCreateDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId($moderatorId);
            $dto->setAreaId($areaId);
            $listVoters = VoterManager::getInstance()->selectAdvance('*', ['area_id', '=', $areaId, 'and', 'number', '=', $voterNumber]);
            if (!empty($listVoters) && count($listVoters) === 1) {
                $voter = $listVoters[0];
                $dto->setExistInList(1);
            } else {
                $dto->setExistInList(0);
            }
            return $this->insertDto($dto);
        }

        public function mb_ucfirst($string, $encoding = "UTF-8") {
            $strlen = mb_strlen($string, $encoding);
            $firstChar = mb_substr($string, 0, 1, $encoding);
            $then = mb_substr($string, 1, $strlen - 1, $encoding);
            return mb_strtoupper($firstChar, $encoding) . $then;
        }

        public function getDuplicatedInListRealVoters($voterIds) {
            $duplicatedInListRealVoters = $this->mapper->getDuplicatedInListRealVoters($voterIds);
            $ret = [];
            foreach ($duplicatedInListRealVoters as $duplicatedInListRealVoter) {
                $ret[$duplicatedInListRealVoter->getVoterId()] = $duplicatedInListRealVoter;
            }
            return $ret;
        }

        public function getDuplicatedRealVoters() {
            return $this->mapper->getDuplicatedRealVoters();
        }

    }

}
