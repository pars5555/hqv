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

    class AddCountryAction extends TableAddAbstractAction {

        function __construct() {
            parent::__construct();
            $this->addValidateCallback('name', 'notEmpty');
            $this->addValidateCallback('mobile_code', 'notEmpty');
            // $this->addValidateCallback('logo', 'validateLogo');
        }

        
         public function getTableName() {
            return "country";
        }
        
        public function onItemAdd($dto) {
            $id = $dto->getId();
           
        }
   
    }

}