<?php


/**
 * @author Vahagn Kirakosyan
 */
namespace ngsadmin\loads\lists {

use ngsadmin\loads\TableListAbstractLoad;

class SkinProblemLoad extends TableListAbstractLoad {

    function load() {
            $this->renderTable();
    }

    public function getTableName() {
        return "skin_problem";
    }

    public function getPageTitle() {
        return 'Skin Problem';
    }


}
}
