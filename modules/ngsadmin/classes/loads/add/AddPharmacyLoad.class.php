<?php

namespace ngsadmin\loads\add {

    use ngsadmin\loads\TableAddAbstractLoad;

    class AddPharmacyLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
              $this->removeVisibleField('added_date');
            $this->removeVisibleField('update_date');
            // $this->addFileField('logo','User Logo', 'getUserLogo');
        }

        public function getTableName() {
            return "pharmacy";
        }

    }

}
