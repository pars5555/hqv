<?php

namespace ngsadmin\loads {

use Exception;
use NGS;
use ngsadmin\loads\TableAbstractLoad;
use ngsadmin\managers\TableManager;

    abstract class TableListAbstractLoad extends TableAbstractLoad {

        abstract public function getPageTitle();

        public function load() {
            
        }

//generate all tables data for admin pages..
        public function renderTable() {
            try {
                $tableManager = TableManager::getInstance();
                $params = new ParamsBin();
                foreach ($this->visibleFieldSamples as $visibleFieldSample) {
                    if ($visibleFieldSample->getRelation()) {
                        $relation = $visibleFieldSample->getRelation();
                        if (isset($relation['table']) && isset($relation['field'])) {
                            $relation['baseTableField'] = $visibleFieldSample->getDbFieldName();
                            $params->addRelation($relation);
                        }
                    }
                }
                $params->setFilters($this->filters);

                $limit = 10;
                if (isset($_REQUEST['limit']) && is_numeric($_REQUEST['limit'])) {
                    $limit = $_REQUEST['limit'];
                }
                $page = 1;
                if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                }
                $offset = $limit * ($page - 1);

                if (isset($_REQUEST['export_csv']) && $_REQUEST['export_csv'] == 1) {
                    $offset = null;
                    $limit = null;
                }

                $params->setLimit($limit);
                $params->setOffset($offset);
                $data = NGS()->args();
//                var_dump(NGS()->args());
                if (isset($data->ordering)) {
                    $params->setOrderDirection($data->ordering);
                }
                if (isset($data->ordering)) {
                    $params->setOrderField($data->sorting);
                }
                if (isset($data->searchField)) {
                    $params->setSearchField($data->searchField);
                }
                if (isset($data->searchText)) {
                    $params->setSearchTerm($data->searchText);
                }
                    $this->addParam('orderField', $data->sorting);
                    $this->addParam('searchField', $data->searchField);
                    $this->addParam('searchText', $data->searchText);
                    $this->addParam('orderDirection', $data->ordering);

                $items = $tableManager->getItems($params);
                $this->initPaging($page, $tableManager->getAllItemsCount($params), $limit, 10);
                $this->addParam('items', $items);
                $this->addParam('visibleFields', $this->visibleFieldSamples);
                $this->addParam('pageTitle', $this->getPageTitle());
                if (isset($_REQUEST['export_csv']) && $_REQUEST['export_csv'] == 1) {
                    $this->outputCsv($this->visibleFieldSamples, $items);
                }
            } catch (Exception $e) {
                var_dump($e);
                exit;
            }
        }

        public function getVisibleFieldSamples() {
            $tableManager = TableManager::getInstance();
            return $tableManager->getVisibleFieldSamples();
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/table.tpl";
        }

        public function outputCsv($visibleFields, $items) {
            $csvData = array();
            foreach ($visibleFields as $visibleField) {
                $csvData[0][] = $visibleField->getTitle();
            }
            $index = 1;
            foreach ($items as $item) {
                foreach ($visibleFields as $visibleField) {
                    $getter = $visibleField->getGetter();
                    $csvData[$index][] = $item->$getter();
                }
                $index++;
            }
            $fileName = "export_" . $this->getTableName() . "_" . date("Y_m_d_H_i_s") . '.csv';
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename=' . $fileName);

            $outstream = fopen("php://output", "w");
            foreach ($csvData as $rowData) {
                fputcsv($outstream, $rowData);
            }
            fclose($outstream);
            exit;
        }

    }

}
