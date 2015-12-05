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

    use hqv\dal\mappers\VoterMapper;

    class VoterManager extends AdvancedAbstractManager {

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
                self::$instance = new VoterManager(VoterMapper::getInstance());
            }
            return self::$instance;
        }

        public function getMaxAndMinBirthDates() {
            return $this->mapper->getMaxAndMinBirthDates();
        }
        
        public function getByHash($hash) {
            $rows = $this->selectByField('hash', $hash);
            if (!empty($rows)) {
                return $rows [0];
            }
            return null;
        }
        
        public function  addRow($number, $firstName, $lastName, $fatherName, $birthDate, $areaId, $address){
            $dto = $this->createDto();
            $dto->setNumber($number);
            $dto->setFirstName($firstName);
            $dto->setLastName($lastName);
            $dto->setFatherName($fatherName);
            $dto->setBirthDate($birthDate);
            $dto->setAddress($address);
            $dto->setAreaId($areaId);
            return $this->insertDto($dto);
        }

    }

}
