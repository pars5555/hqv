<?php

namespace ngsadmin\loads\edit {

use ngsadmin\loads\TableEditAbstractLoad;

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class EditUserWishlistLoad extends TableEditAbstractLoad {

    function __construct() {
        parent::__construct();
    }

    public function getTableName() {
        return "user_wishlist";
    }

}
}
