<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditSkinTypeLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
		
    }

    public function getTableName() {
        return "skin_type";
    }

}
}
