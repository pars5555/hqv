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

    use hqv\dal\mappers\EmergencyPhoneNumberMapper;

    class EmergencyPhoneNumberManager extends AdvancedAbstractManager {

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
                self::$instance = new EmergencyPhoneNumberManager(EmergencyPhoneNumberMapper::getInstance());
            }
            return self::$instance;
        }

        public function selectGroupByIp() {
            return $this->mapper->selectGroupByIp();
            
        }
        
        public function addRow($phoneNumber) {
            $dto = $this->createDto();
            $dto->setPhoneNumber($phoneNumber);
            $dto->setIpAddress($_SERVER['REMOTE_ADDR']);
            $dto->setDatetime(date('Y-m-d- H:i:s'));
            return $this->insertDto($dto);
        }
        
          public function addSystemRow($id, $phoneNumber, $ip_address, $datetime) {
            $dto = $this->createDto();
            $dto->setId($id);
            $dto->setPhoneNumber($phoneNumber);
            $dto->setIpAddress($ip_address);
            $dto->setDatetime($datetime);
            return $this->insertDto($dto);
        }

    }

}
