<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

    use ngsadmin\loads\TableListAbstractLoad;
    use NGS;

    class UserSkinProblemLoad extends TableListAbstractLoad {

        function load() {
            $this->setFieldTitle('user_id', 'User');
            $this->setRelationField('user_id', 'users', 'first_name');
            $this->setFieldTitle('skin_problem_id', 'Skin Problem');
            $this->setRelationField('skin_problem_id', 'skin_problem', 'name');
            $this->renderTable();
        }

        public function getTableName() {
            return "user_skin_problem";
        }

        public function getPageTitle() {
            return 'User Skin Problem';
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/list/user_skin_problem.tpl";
        }

    }

}

