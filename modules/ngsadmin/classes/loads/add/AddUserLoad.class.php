<?php

namespace ngsadmin\loads\add {

    use ngsadmin\loads\TableAddAbstractLoad;

    class AddUserLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
            // $this->addFileField('logo','User Logo', 'getUserLogo');
            $this->setRelationField('country_id', 'country', 'name');
            $this->setFieldTitle('country_id', 'Country');
            $this->removeVisibleField('added_date');
            $this->removeVisibleField('update_date');
        }

        public function getTableName() {
            return "user";
        }

    }

}
