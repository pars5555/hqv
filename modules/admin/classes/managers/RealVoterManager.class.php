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

    use admin\dal\mappers\RealVoterMapper;
    use hqv\managers\AdvancedAbstractManager;

    class RealVoterManager extends AdvancedAbstractManager {

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
                self::$instance = new RealVoterManager(RealVoterMapper::getInstance());
            }
            return self::$instance;
        }

        public function editRow($id, $firstName, $lastName, $fatherName, $birthDate, $moderatorId) {
            $firstName = $this->mb_ucfirst($firstName);
            $lastName = $this->mb_ucfirst($lastName);
            $fatherName = $this->mb_ucfirst($fatherName);
            $dto = $this->selectByPK($id);
            $dto->setFirstName($firstName);
            $dto->setLastName($lastName);
            $dto->setFatherName($fatherName);
            $dto->setBirthDate($birthDate);
            $dto->setChangeDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId($moderatorId);
            $listVoters = \hqv\managers\VoterManager::getInstance()->selectAdvance('*', ['first_name', '=', "'$firstName'", 'and',
                'last_name', '=', "'$lastName'", 'and', 'father_name', '=', "'$fatherName'", 'and', 'birth_date', '=', "'$birthDate'"]);
            if (!empty($listVoters)) {
                $voter = $listVoters[0];
                $dto->setVoterId($voter->getId());
            }

            return $this->updateByPk($dto);
        }

        public function addRow($firstName, $lastName, $fatherName, $birthDate, $moderatorId) {
            $firstName = $this->mb_ucfirst($firstName);
            $lastName = $this->mb_ucfirst($lastName);
            $fatherName = $this->mb_ucfirst($fatherName);
            $dto = $this->createDto();
            $dto->setFirstName($firstName);
            $dto->setLastName($lastName);
            $dto->setFatherName($fatherName);
            $dto->setBirthDate($birthDate);
            $dto->setCreateDatetime(date('Y-m-d H:i:s'));
            $dto->setModeratorId($moderatorId);
            $listVoters = \hqv\managers\VoterManager::getInstance()->selectAdvance('*', ['first_name', '=', "'$firstName'", 'and',
                'last_name', '=', "'$lastName'", 'and', 'father_name', '=', "'$fatherName'", 'and', 'birth_date', '=', "'$birthDate'"]);
            if (!empty($listVoters)) {
                $voter = $listVoters[0];
                $dto->setVoterId($voter->getId());
            }

            return $this->insertDto($dto);
        }

        public function mb_ucfirst($string, $encoding = "UTF-8") {
            $strlen = mb_strlen($string, $encoding);
            $firstChar = mb_substr($string, 0, 1, $encoding);
            $then = mb_substr($string, 1, $strlen - 1, $encoding);
            return mb_strtoupper($firstChar, $encoding) . $then;
        }
        
        public function getDuplicatedRealVoters() {
            return $this->mapper->getDuplicatedRealVoters();
        }

    }

}
