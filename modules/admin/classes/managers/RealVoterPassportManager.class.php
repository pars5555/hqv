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

    use admin\dal\mappers\RealVoterPassportMapper;
    use hqv\managers\AdvancedAbstractManager;
    use hqv\managers\VoterManager;

    class RealVoterPassportManager extends AdvancedAbstractManager {

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
                self::$instance = new RealVoterPassportManager(RealVoterPassportMapper::getInstance());
            }
            return self::$instance;
        }

        public function editRow($voterId, $inArea, $id, $firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId, $passportType) {
            $dto = $this->selectByPK($id);
            $dto->setFirstName($firstName);
            $dto->setLastName($lastName);
            $dto->setFatherName($fatherName);
            $dto->setBirthDate($birthDate);
            $dto->setPassportType($passportType);
            $dto->setChangeDatetime(date('Y-m-d H:i:s'));
            $dto->setAreaId($areaId);
            $dto->setVoterId($voterId);
            $dto->setInAreaList($inArea);
            return $this->updateByPk($dto);
        }

        public function addRow($voterId, $inArea, $firstName, $lastName, $fatherName, $birthDate, $moderatorId, $areaId, $passportType) {
            $dto = $this->createDto();
            $dto->setFirstName($firstName);
            $dto->setLastName($lastName);
            $dto->setFatherName($fatherName);
            $dto->setBirthDate($birthDate);
            $dto->setPassportType($passportType);
            $dto->setCreateDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId($moderatorId);
            $dto->setAreaId($areaId);
            $dto->setVoterId($voterId);
            $dto->setInAreaList($inArea);
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

        public function getTotalNonDuplicationButFakeVotesCount() {
            return $this->mapper->getTotalNonDuplicationButFakeVotesCount();
        }

    }

}
