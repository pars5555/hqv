<?php

namespace ngsadmin\loads\add {

    use ngsadmin\loads\TableAddAbstractLoad;

    class AddUserSkinTypeLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
            // $this->addFileField('logo','User Logo', 'getUserLogo');
            $this->setFieldTitle('user_id', 'User');
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setFieldTitle('skin_type_id', 'Skin Type');
            $this->setRelationField('skin_type_id', 'skin_type', 'name');
            $this->removeVisibleField('added_date');
            $this->removeVisibleField('update_date');
        }

        public function getTableName() {
            return "user_skin_type";
        }

    }

}
