<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions\add {

use ngsadmin\actions\TableAddAbstractAction;

    class AddSkinProblemAction extends TableAddAbstractAction {

        function __construct() {
            parent::__construct();
            $this->addValidateCallback('name', 'notEmpty');
        }

        public function getTableName() {
            return "skin_problem";
        }

        public function onItemAdd($dto) {
            //* $id = $dto->getId();
        }

    }

}