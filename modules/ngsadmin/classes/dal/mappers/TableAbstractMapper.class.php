<?php

namespace ngsadmin\dal\mappers {

    use ngsadmin\loads\ParamsBin;
    use ngs\framework\dal\mappers\AbstractMysqlMapper;

    abstract class TableAbstractMapper extends AbstractMysqlMapper {

        private static $GET_TABLE_ITEMS = "SELECT `%s`.* %s FROM `%s` %s %s %s %s;";

        public function getTableItems(ParamsBin $params = null) {
            if (!isset($params)) {
                return $this->selectAll();
            }
            $selectQuery = "";
            $joinQueries = "";
            $relationFieldNameGetterMap = array();
            if (is_array($params->getRelations())) {
                foreach ($params->getRelations() as $relation) {
                    $fieldName = "relation_" . $relation['table'] . "_" . $relation['field'];
                    $relationFieldNameGetterMap[$fieldName] = $relation['setter'];
                    $selectQuery.= sprintf(',`%s`.`%s` AS %s', $relation['table'], $relation['field'], $fieldName);
                    $joinQueries.= sprintf(" LEFT JOIN `%s` ON `%s`.id = `%s`.`%s`", $relation['table'], $relation['table'], $this->getTableName(), $relation['baseTableField']);
                }
            }

            $filterQuery = "";
            $filters = $params->getFilters();
            if (!empty($filters)) {
                $filterQuery = " WHERE " . implode(' AND ', $filters);
            }

            $searchField = $params->getSearchField();
            $searchTerm = $params->getSearchTerm();
            $searchQuery = "";
            if (!empty($searchTerm)) {
                $relation = $params->getRelation($searchField);
                if ($relation) {
                    $searchField = $relation['table'] . '.' . $relation['field'];
                } else {
                    $searchField = $this->getTableName() . '.' . $searchField;
                }
                $searchQuery = $searchField . " LIKE '%" . $searchTerm . "%' ";
            }
            if (!empty($searchQuery)) {
                if (empty($filterQuery)) {
                    $filterQuery.= " WHERE " . $searchQuery;
                } else {
                    $filterQuery.= " AND " . $searchQuery;
                }
            }
            $limitQuery = "";
            if (is_numeric($params->getLimit()) && is_numeric($params->getOffset())) {
                $limitQuery = sprintf(" LIMIT %d,%d ", $params->getOffset(), $params->getLimit());
            }
            $orderQuery = "";
            if ($params->getOrderDirection() && $params->getOrderField()) {
                $relation = $params->getRelation($params->getOrderField());
                if ($relation) {
                    $orderField = $relation['table'] . '.' . $relation['field'];
                } else {
                    $orderField = $this->getTableName() . '.' . $params->getOrderField();
                }
                $orderQuery = sprintf(" ORDER BY %s %s", $orderField, $params->getOrderDirection());
            }
            $sql = sprintf(self::$GET_TABLE_ITEMS, $this->getTableName(), $selectQuery, $this->getTableName(), $joinQueries, $filterQuery, $orderQuery, $limitQuery);
         
            $res = $this->dbms->query($sql);
            $resultArr = array();
            if ($res && $this->getResultCount($res) > 0) {
                $results = $this->getResultArray($res);

                foreach ($results as $result) {
                    $dto = $this->createDto();
                    $this->initializeDto($dto, $result);
                    foreach ($relationFieldNameGetterMap as $fieldName => $setter) {
                        if (isset($result[$fieldName])) {
                            $dto->$setter($result[$fieldName]);
                        }
                    }
                    $resultArr[] = $dto;
                }
            }
            return $resultArr;
        }

        private static $GET_ALL_ITEMS_COUNT = "SELECT COUNT(*) AS count FROM `%s` %s %s;";

        public function getAllItemsCount(ParamsBin $params = null) {
            $joinQueries = "";
            $filterQuery = "";
            if ($params) {
                if (is_array($params->getRelations())) {
                    foreach ($params->getRelations() as $relation) {
                        $joinQueries.= sprintf(" LEFT JOIN `%s` ON `%s`.id = `%s`.`%s`", $relation['table'], $relation['table'], $this->getTableName(), $relation['baseTableField']);
                    }
                }

                $filters = $params->getFilters();
                 
                if (!empty($filters)) {
                    $filterQuery = " WHERE " . implode(' AND ', $filters);
                }

                $searchField = $params->getSearchField();
                $searchTerm = $params->getSearchTerm();
                $searchQuery = "";
                if (!empty($searchTerm)) {
                    $relation = $params->getRelation($searchField);
                    if ($relation) {
                        $searchField = $relation['table'] . '.' . $relation['field'];
                    } else {
                        $searchField = $this->getTableName() . '.' . $searchField;
                    }
                    $searchQuery = $searchField . " LIKE '%" . $searchTerm . "%' ";
                }
                if (!empty($searchQuery)) {
                    if (empty($filterQuery)) {
                        $filterQuery.= " WHERE " . $searchQuery;
                    } else {
                        $filterQuery.= " AND " . $searchQuery;
                    }
                }
            }

            $sql = sprintf(self::$GET_ALL_ITEMS_COUNT, $this->getTableName(), $joinQueries, $filterQuery);
            return $this->fetchField($sql, 'count');
        }

        public function getTableColumnTypes() {
            $sql = sprintf("SHOW COLUMNS FROM `%s`;", $this->getTableName());
            $res = $this->dbms->query($sql);

            $resultArr = array();

            if ($res && $this->getResultCount($res) > 0) {
                $results = $this->getResultArray($res);
                foreach ($results as $result) {
                    $type = explode("(", $result['Type']);
                    $dbType = $type[0];
                    if (isset($type[1])) {
                        if (substr($type[1], -1) == ')') {
                            $length = substr($type[1], 0, -1);
                        } else {
                            list($length) = explode(" ", $type[1]);
                            $length = substr($length, 0, -1);
                        }
                    } else {
                        $length = '';
                    }
                    $resultArr[$result['Field']]['max_length'] = $length;
                    $resultArr[$result['Field']]['type'] = $dbType;
                    $resultArr[$result['Field']]['null'] = $result['Null'] == 'YES' ? true : false;
                    $resultArr[$result['Field']]['extra'] = $result['Extra'];
                }
            }
            return $resultArr;
        }

        public function getResultArray($res) {
            if ($res) {
                $result = $res->fetchAll();
                return $result;
            } else {
                die("Wrong resource");
            }
        }

        public function getResultCount($res) {
            if ($res) {
                return $res->rowCount();
            }
            return false;
        }

    }

}
