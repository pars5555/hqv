<?php

/**
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2010-2015
 * @package managers
 * @version 6.0
 *
 */

namespace hqv\managers {

    use hqv\dal\mappers\VoterDataMapper;

    class VoterDataManager extends AdvancedAbstractManager {

        /**
         * @var $instance
         */
        public static $instance;

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new VoterDataManager(VoterDataMapper::getInstance());
            }
            return self::$instance;
        }

        public function getParticipantCounts() {
            return $this->mapper->getParticipantCounts();
        }

        public function getDuplicatedOrDeathData($offset, $limit) {
            return $this->mapper->getDuplicatedOrDeathData($offset, $limit);
        }

        public function getDuplicatedOrDeathDataCount() {
            return $this->mapper->getDuplicatedOrDeathDataCount();
        }

        public function getNonParticipantCounts() {
            return $this->mapper->getNonParticipantCounts();
        }

        public function getDataCountGroupByVoterId() {
            return $this->mapper->getDataCountGroupByVoterId();
        }

        public function selectJoinVoters($where, $offset, $limit) {
            $where = $this->getWhereSubQueryByFilters($where);
            return $this->mapper->selectJoinVoters($where, $offset, $limit);
        }

        public function selectJoinVotersCount($where) {
            $where = $this->getWhereSubQueryByFilters($where);
            return $this->mapper->selectJoinVotersCount($where);
        }

        public  function getVoterIdFromOldVoterId($oldVoterId) {
            $oldVoter = VoterOldManager::getInstance()->selectByPK($oldVoterId);
            if (!$oldVoter) {
                return 0;
            }
            $firstName = $oldVoter->getFirstName();
            $lastName = $oldVoter->getLastName();
            $fatherName = $oldVoter->getFatherName();
            $birthDate = $oldVoter->getBirthDate();
            $newVoters = VoterManager::getInstance()->selectAdvance('*', ['first_name', '=', "'$firstName'", 'and',
                'last_name', '=', "'$lastName'", 'and',
                'father_name', '=', "'$fatherName'", 'and',
                'birth_date', '=', "'$birthDate'"]);
            if (!empty($newVoters) && count($newVoters) === 1) {
                return $newVoters[0]->getId();
            }
            return 0;
        }

        public function addSystemRow($id, $voterId, $email, $phone, $will_vote, $will_be_in_arm, $is_death, $ip_address, $country, $browser, $version, $os, $datetime) {
            $dto = $this->createDto();
            $dto->setId($id);
            $dto->setOldVoterId($voterId);
            if ($voterId>0){
            $newVoterId = $this->getVoterIdFromOldVoterId($voterId);
            }
            $dto->setVoterId($newVoterId);
            $dto->setEmail($email);
            $dto->setPhone($phone);
            $dto->setWillVote($will_vote);
            $dto->setBeWillInArm($will_be_in_arm);
            $dto->setIsDeath($is_death);
            $dto->setIpAddress($ip_address);
            $dto->setCountry($country);
            $dto->setBrowser($browser);
            $dto->setBrowserVersion($version);
            $dto->setPlatform($os);
            $dto->setDatetime($datetime);
            return $this->insertDto($dto);
        }

        public function addRowFromModerator($voterId) {
            $dto = $this->createDto();
            $dtos = $this->selectAdvance('*', ['id', '>=', 3000000], ['id'], 'DESC', 0, 1);
            if (!empty($dtos)) {
                $lastRowId = intval($dtos[0]->getId()) + 1;
            } else {
                $lastRowId = 3000000;
            }
            $dto->setId($lastRowId);
            $dto->setVoterId($voterId);
            $dto->setWillVote(0);
            $dto->setWillBeInArm(0);
            $dto->setDatetime(date('Y-m-d H:i:s'));
            $dto->setAdminId(NGS()->getSessionManager()->getUserId());
            return $this->insertDto($dto);
        }

        public function addRow($voterId, $email, $phone, $will_vote, $will_be_in_arm, $is_death, $ip_address, $country, $browser, $version, $os) {
            $dto = $this->createDto();
            $dto->setVoterId($voterId);
            $dto->setEmail($email);
            $dto->setPhone($phone);
            $dto->setWillVote($will_vote);
            $dto->setWillBeInArm($will_be_in_arm);
            $dto->setIsDeath($is_death);
            $dto->setIpAddress($ip_address);
            $dto->setCountry($country);
            $dto->setBrowser($browser);
            $dto->setBrowserVersion($version);
            $dto->setPlatform($os);
            $dto->setDatetime(date('Y-m-d H:i:s'));
            return $this->insertDto($dto);
        }

    }

}
