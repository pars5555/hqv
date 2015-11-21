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

        public function getNonParticipantCounts() {
            return $this->mapper->getNonParticipantCounts();
        }

        public function getDataCountGroupByVoterId() {
            return $this->mapper->getDataCountGroupByVoterId();
        }

        public function addRow($voterId, $email, $phone, $will_vote, $will_be_in_arm, $ip_address, $country, $browser, $version, $os) {
            $dto = $this->createDto();
            $dto->setVoterId($voterId);
            $dto->setEmail($email);
            $dto->setPhone($phone);
            $dto->setWillVote($will_vote);
            $dto->setBeWillInArm($will_be_in_arm);
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
