<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions\add {

use ngsadmin\actions\TableAddAbstractAction;
use ngsadmin\managers\ImageManager;
use ngsadmin\managers\PharmacyManager;
use ngsadmin\managers\TableManager;
use ngsadmin\managers\UserManager;

    class AddUserAction extends TableAddAbstractAction {

        function __construct() {
            parent::__construct();
            $this->addValidateCallback('username', 'usernameIsFree');
            $this->addValidateCallback('password', 'validatePassword');
            $this->addValidateCallback('email', 'emailExists');
            $this->addValidateCallback('first_name', 'notEmpty');
            $this->addValidateCallback('last_name', 'notEmpty');
            // $this->addValidateCallback('logo', 'validateLogo');
        }

        
         public function getTableName() {
            return "user";
        }
        
        public function onItemAdd($dto) {
            $id = $dto->getId();
            // $imageManager = ImageManager::getInstance($this->config, $this->args);
            // $imageManager->addUserLogo($id, $_REQUEST["logo"]);
        }

       

        protected function usernameIsFree($val) {
            if (isset($val) && !empty($val)) {
                $userManager = UserManager::getInstance();
                $existingUser = $userManager->selectByUsername($val);
                if ($existingUser) {
                    throw new Exception('Username already exists.');
                } else {
                    return $val;
                }
            } else {
                throw new Exception('Please provide username.');
            }
        }

        protected function emailExists($val) {
            $userManager = UserManager::getInstance();
            $tableManager = TableManager::getInstance();
            $val = $tableManager->validateEmail($val);
            $userDto = $userManager->selectByEmail($val);
            if ($userDto) {
                throw new Exception("Email already exist.");
            }
            return $val;
        }

     
    }

}