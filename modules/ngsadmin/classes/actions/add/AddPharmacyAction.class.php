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

    class AddPharmacyAction extends TableAddAbstractAction {

        function __construct() {
            parent::__construct();
           
        }

        public function getTableName() {
            return "pharmacy";
        }

        public function onItemAdd($dto) {
            $id = $dto->getId();
        }

    }

}