<?php

namespace ngsadmin\loads\add {

use ngsadmin\loads\TableAddAbstractLoad;


    class AddCountryLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
            // $this->addFileField('logo','User Logo', 'getUserLogo');

        }

        public function getTableName() {
            return "country";
        }

    }

}
