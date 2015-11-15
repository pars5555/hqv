<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\loads\lists {

    use ngsadmin\loads\TableListAbstractLoad;

    class SkinTypeLoad extends TableListAbstractLoad {

        function load() {
                $this->renderTable();
        }

        public function getTableName() {
            return "skin_type";
        }

        public function getPageTitle() {
            return 'Skin Type';
        }
         public function getTemplate() {
            return NGS()->getTemplateDir() . "/list/skin_type.tpl";
        }

    }

}
