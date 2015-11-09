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

use hqv\dal\mappers\DataMapper;


    class DataManager extends AdvancedAbstractManager {

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
                self::$instance = new DataManager(DataMapper::getInstance());
            }
            return self::$instance;
        }

        public function addRow($attacker, $attacker_geo,$attacker_ip,$target_geo,$port,$type,$attack_type,$timestamp) {
            $dto = $this->createDto();
            $dto ->setAttacker($attacker);
            $dto ->setAttackerGeo($attacker_geo);
            $dto ->setTargetGeo($target_geo);
            $dto ->setAttackerIp($attacker_ip);
            $dto ->setPort($port);
            $dto ->setType($type);
            $dto ->setAttackType($attack_type);
            $dto ->setTimestamp($timestamp);
            $dto ->setTimestampMicro(substr($timestamp, strpos($timestamp, '.')+1));
            return $this->insertDto($dto);
        }
    }

}
