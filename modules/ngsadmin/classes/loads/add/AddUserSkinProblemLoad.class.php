<?php

namespace ngsadmin\loads\add {

use ngsadmin\loads\TableAddAbstractLoad;


    class AddUserSkinProblemLoad extends TableAddAbstractLoad {

        function __construct() {
            parent::__construct();
             $this->setFieldTitle('user_id', 'User');
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setFieldTitle('skin_problem_id', 'Skin Problem');
            $this->setRelationField('skin_problem_id', 'skin_problem', 'name');
            $this->removeVisibleField('added_date');
            $this->removeVisibleField('update_date');
        }

        public function getTableName() {
            return "user_skin_problem";
        }

    }

}
