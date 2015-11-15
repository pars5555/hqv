<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditCountryLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
		
    }

    public function getTableName() {
        return "country";
    }

}
}
