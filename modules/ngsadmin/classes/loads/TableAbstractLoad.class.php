<?php

namespace ngsadmin\loads {

use ngsadmin\managers\TableManager;
use ngsadmin\managers\VisibleFieldSample;
     
    abstract class TableAbstractLoad extends BaseAdminLoad {

        protected $visibleFieldSamples;
        protected $filters = array();

          
        function __construct() {
         
            $tableManager = TableManager::getInstance();
            $tableManager->initMapperInstance($this->getTableName());
            $this->visibleFieldSamples = $this->getVisibleFieldSamples();
        }

        abstract public function getTableName();

        abstract public function getVisibleFieldSamples();

        protected function setFieldTitle($dbFieldName, $title) {
            $this->visibleFieldSamples[$dbFieldName]->setTitle($title);
        }

        protected function setFieldType($dbFieldName, $type) {
            $this->visibleFieldSamples[$dbFieldName]->setFieldType($type);
        }

        protected function setFieldTitles($mapArr) {
            foreach ($mapArr as $dbFieldName => $title) {
                $this->visibleFieldSamples[$dbFieldName]->setTitle($title);
            }
        }

        protected function removeVisibleField($dbFieldName) {
            unset($this->visibleFieldSamples[$dbFieldName]);
        }

        protected function addFileField($fieldName, $title, $getter) {
            $visibleFieldSample = new VisibleFieldSample($title, $fieldName, $fieldName, 'file');
            $visibleFieldSample->setGetter($getter);
            $this->visibleFieldSamples[$fieldName] = $visibleFieldSample;
        }

        protected function setVisibleFields($dbFieldNameArr) {
            $tableManager = TableManager::getInstance();
            $visibleFields = $tableManager->getVisibleFieldSamples();

            foreach ($visibleFields as $dbFieldName => $visibleFieldSample) {
                if (!in_array($dbFieldName, $dbFieldNameArr)) {
                    unset($visibleFields[$dbFieldName]);
                }
            }
            $this->visibleFieldSamples = $visibleFields;
        }

        protected function setFieldGetter($dbFieldName, $getterName) {
            $this->visibleFieldSamples[$dbFieldName]->setGetter($getterName);
        }

        protected function setRelationField($fieldName, $relationTableName, $relationFieldName) {
            $this->visibleFieldSamples[$fieldName]->setRelation(array('table' => $relationTableName, 'field' => $relationFieldName));
        }

        protected function addFilterClause($clause) {
            $this->filters[] = $clause;
        }

        protected function getFilterClauses() {
            return $this->filters;
        }

    }

    class ParamsBin {

        private $orderField;
        private $orderDirection;
        private $searchField;
        private $searchTerm;
        private $offset;
        private $limit;
        private $relations;
        private $filters;

        function __construct($orderField = 'id', $orderDirection = 'asc', $searchField = null, $searchTerm = null, $offset = null, $limit = null) {
            $this->setOrderField($orderField);
            $this->setOrderDirection($orderDirection);
            $this->setSearchField($searchField);
            $this->setSearchTerm($searchTerm);
            $this->setOffset($offset);
            $this->setLimit($limit);
        }

        public function getOrderField() {
            return $this->orderField;
        }

        public function setOrderField($orderField) {
            $this->orderField = $orderField;
        }

        public function getOrderDirection() {
            return $this->orderDirection;
        }

        public function setOrderDirection($orderDirection) {
            $this->orderDirection = $orderDirection;
        }

        public function getSearchField() {
            return $this->searchField;
        }

        public function setSearchField($searchField) {
            $this->searchField = $searchField;
        }

        public function getSearchTerm() {
            return $this->searchTerm;
        }

        public function setSearchTerm($searchTerm) {
            $this->searchTerm = $searchTerm;
        }

        public function getOffset() {
            return $this->offset;
        }

        public function setOffset($offset) {
            $this->offset = $offset;
        }

        public function getLimit() {
            return $this->limit;
        }

        public function setLimit($limit) {
            $this->limit = $limit;
        }

        public function getRelations() {
            return $this->relations;
        }

        public function getRelation($baseTableFieldName) {
            if (is_array($this->relations)) {
                foreach ($this->relations as $relation) {
                    if ($relation['baseTableField'] == $baseTableFieldName) {
                        return $relation;
                    }
                }
            }
            return null;
        }

        public function setRelations($relations) {
            $this->relations = $relations;
        }

        public function addRelation($relation) {
            $this->relations[] = $relation;
        }

        public function getFilters() {
            return $this->filters;
        }

        public function setFilters($filters) {
            $this->filters = $filters;
        }

    }

}
