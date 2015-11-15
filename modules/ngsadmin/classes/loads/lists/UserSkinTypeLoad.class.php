<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

    use ngsadmin\loads\TableListAbstractLoad;

    class UserSkinTypeLoad extends TableListAbstractLoad {

        function load() {
            $this->setFieldTitle('user_id', 'User');
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setFieldTitle('skin_type_id', 'Skin Type');
            $this->setRelationField('skin_type_id', 'skin_type', 'name');
            $this->renderTable();
        }

        public function getTableName() {
            return "user_skin_type";
        }

        public function getPageTitle() {
            return 'User Skin Type';
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/list/user_skin_type.tpl";
        }

    }

}

