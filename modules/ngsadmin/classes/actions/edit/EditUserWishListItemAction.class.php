<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions\edit {

    use ngsadmin\actions\TableEditAbstractAction;
    use ngsadmin\managers\ImageManager;
    use ngsadmin\managers\PharmacyManager;
    use ngsadmin\managers\TableManager;
    use ngsadmin\managers\UserManager;

    class EditUserWishListItemAction extends TableEditAbstractAction {

        function __construct() {
            
            parent::__construct();
           
//            $this->addValidateCallback('username', 'notEmpty');
//            $this->addValidateCallback('password', 'validatePassword');
//            $this->addValidateCallback('email', 'emailExists');
//            $this->addValidateCallback('first_name', 'notEmpty');
//            $this->addValidateCallback('last_name', 'notEmpty');
//            $this->addValidateCallback('mobile_number', 'validateMobileNumber');
//            $this->addValidateCallback('country', 'notEmpty');
            // $this->addValidateCallback('logo', 'validateLogo');
        }

        public function onItemUpdate($dto) {
            // if(isset($_REQUEST['logo'])){
            // $imageManager = ImageManager::getInstance( );
            // $id = $dto->getId();
            // $imageManager->addUserLogo($id, $_REQUEST["logo"]);
            // }
        }

        protected function validatePassword($val) {
            if (empty($val)) {
                return null;
            } else {
                return md5($val);
            }
        }

        protected function emailExists($val) {
            $userManager = UserManager::getInstance();
            $tableManager = TableManager::getInstance();
            $val = $tableManager->validateEmail($val);
            $userDto = $userManager->selectByEmail($val);
            if ($userDto && $userDto->getId() != NGS()->args()->id()) {
                throw new Exception("Email already exist.");
            }
            return $val;
        }

        protected function pharmacyExists($val) {
            $pharmacy = PharmacyManager::getInstance()->selectById($val);
            if ($pharmacy) {
                return $pharmacy->getId();
            }
            throw new Exception("Pharmacy does not exist.");
        }

        protected function validateLogo($val) {
            if (isset($val) && !empty($val)) {
                $imageManager = ImageManager::getInstance();
                if ($imageManager->checkValidImage(UPLOAD_TEMP_DIR . '/' . $val)) {
                    return $val;
                }
            } else {
                return null;
            }
        }

        public function getTableName() {
            return "user_wishlist";
        }

    }

}