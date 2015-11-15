<?php

namespace ngsadmin\loads {

use NGS;
use ngsadmin\managers\TableManager;

    abstract class TableAddAbstractLoad extends TableAbstractLoad {

        public function load() {
            
            $tableManager = TableManager::getInstance();
            $this->addParam('visibleFieldSamples', $this->visibleFieldSamples);

            if (method_exists($this, 'afterAddLoad')) {
                $this->afterAddLoad();
            }
        }

        public function getVisibleFieldSamples() {
            $tableManager = TableManager::getInstance();
            return $tableManager->getEditVisibleFieldSamples();
        }

        protected function setFieldDefaultValue($dbFieldName, $value) {
            $this->visibleFieldSamples[$dbFieldName]->setFieldDefaultValue($value);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/table_add.tpl";
        }

    }

}
