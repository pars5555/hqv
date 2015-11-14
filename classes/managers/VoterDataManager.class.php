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

        public function addRow($voterHash, $email, $phone, $willVote, $ipAddress, $country, $browser, $wantsReceiveEmail) {
            $dto = $this->createDto();
            $dto ->setVoterId($voterHash);
            $dto ->setEmail($email);
            $dto ->setPhone($phone);
            $dto ->setWillWote($willVote);
            $dto ->setIpAddress($ipAddress);
            $dto ->setCountry($country);
            $dto ->setBrowser($browser);
            $dto ->setWantsReceiveEmail($wantsReceiveEmail);
            return $this->insertDto($dto);
        }
        
        

    }

}
