<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditUserOrderHistoryLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
		
    }

    public function getTableName() {
        return "user_order_history";
    }

}
}
