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

    class AddSkinTypeAction extends TableAddAbstractAction {

        function __construct() {
            parent::__construct();
            $this->addValidateCallback('name', 'notEmpty');
        }

        public function getTableName() {
            return "skin_type";
        }

        public function onItemAdd($dto) {
            //$id = $dto->getId();
        }

    }

}