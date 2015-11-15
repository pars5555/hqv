<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditPharmacyLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
		$this->setFieldGetter('password', 'getPasswordEditView');
		// $this->addFileField('logo','User Logo', 'getUserLogo');
		
    }

    public function getTableName() {
        return "pharmacy";
    }

}
}
