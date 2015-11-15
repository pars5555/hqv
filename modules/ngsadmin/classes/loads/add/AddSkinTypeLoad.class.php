<?php

namespace ngsadmin\loads\add {

    use ngsadmin\loads\TableAddAbstractLoad;

    class AddSkinTypeLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
            $this->removeVisibleField('added_date');
        }

        public function getTableName() {
            return "skin_type";
        }

    }

}
