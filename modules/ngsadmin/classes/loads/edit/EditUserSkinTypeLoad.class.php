<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditUserSkinTypeLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
		
    }

    public function getTableName() {
        return "user_skin_type";
    }

}
}
