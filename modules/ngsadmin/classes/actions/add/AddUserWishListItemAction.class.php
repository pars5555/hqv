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

    class AddUserWishListItemAction extends TableAddAbstractAction {

        function __construct() {
            $this->replaceAutofillDataFromRequest();
            parent::__construct();
//            $this->addValidateCallback('po_box', 'notEmpty');
            // $this->addValidateCallback('logo', 'validateLogo');
        }

        public function replaceAutofillDataFromRequest() {
            $_REQUEST['user_id'] = $_REQUEST['user_id_autofill_id'];
            unset($_REQUEST['user_id_autofill_id']);
            $_REQUEST['product_id'] = $_REQUEST['product_id_autofill_id'];
            unset($_REQUEST['product_id_autofill_id']);
        }

        public function getTableName() {
            return "user_wishlist";
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
                throw new Exception("Please upload a logo");
            }
        }

    }

}