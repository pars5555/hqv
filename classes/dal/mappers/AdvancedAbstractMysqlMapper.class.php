<?php

/**
 *
 * Mysql mapper class is extended class from AbstractMysqlMapper.
 * It contatins all read and write functions which are working with its table.
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2015
 * @package crm.dal.mappers
 * @version 2.0.0
 *
 */

namespace hqv\dal\mappers {

    use \ngs\framework\dal\mappers\AbstractMysqlMapper;

    abstract class AdvancedAbstractMysqlMapper extends AbstractMysqlMapper {

        public function selectByField($fieldName, $fieldValue) {
            $sqlQuery = sprintf("SELECT * FROM `%s` WHERE `%s` = :value ", $this->getTableName(), $fieldName);
            return $this->fetchRows($sqlQuery, array("value" => $fieldValue));
        }

        public function deleteByField($fieldName, $fieldValue) {
            $sqlQuery = sprintf("DELETE FROM `%s` WHERE `%s` = :value ", $this->getTableName(), $fieldName);
            $res = $this->dbms->prepare($sqlQuery);
            if ($res) {
                $res->execute(array("value" => $fieldValue));
                return $res->rowCount();
            }
            return null;
        }

        public function selectByPKs($pks) {
            $sqlQuery = sprintf("SELECT * FROM `%s` WHERE `%s` in (%s) ", $this->getTableName(), $this->getPKFieldName(), implode(',', $pks));
            return $this->fetchRows($sqlQuery);
        }

        public function selectAdvanceCount($where) {
            $sqlQuery = sprintf("SELECT count(`id`) as `count` FROM `%s` %s ", $this->getTableName(), $where);
            return $this->fetchField($sqlQuery, 'count');
        }

        public function selectAdvance($fields, $where, $order, $offset, $limit) {
            $sqlQuery = sprintf("SELECT %s FROM `%s` %s %s ", $fields, $this->getTableName(), $where, $order);
            if (isset($limit) && $limit > 0) {
                $sqlQuery .= ' LIMIT ' . $offset . ', ' . $limit;
            }
            return $this->fetchRows($sqlQuery);
        }

        public function deleteAdvance($where) {
            $sqlQuery = sprintf("DELETE FROM `%s` %s", $this->getTableName(), $where);
            $res = $this->dbms->prepare($sqlQuery);
            if ($res) {
                $res->execute();
                return $res->rowCount();
            }
            return null;
        }

        public function startTransaction() {
            $this->dbms->beginTransaction();
        }

        /**
         * Commits the current transaction
         */
        public function commitTransaction() {
            $this->dbms->commit();
        }

        /**
         * Rollback the current transaction
         */
        public function rollbackTransaction() {
            $this->dbms->rollback();
        }

        /**
         * encode dto to json
         *
         * @param object $dto
         *
         * @return json object
         */
        public static function _dtoToJson($dto) {
            return json_encode(self::dtoToArray($dto));
        }

        public static function _dtosToJson($dtos) {
            $ret = [];
            foreach ($dtos as $dto) {
                $ret[] = self::_dtoToArray($dto);
            }
            return json_encode($ret);
        }

        /**
         * encode dto to array
         *
         * @param object $dto
         *
         * @return json object
         */
        public static function _dtoToArray($dto) {
            $dto_fields = array_values($dto->getMapArray());
            $db_fields = array_keys($dto->getMapArray());

            for ($i = 0; $i < count($dto_fields); $i++) {
                $functionName = "get" . ucfirst($dto_fields[$i]);
                $val = $dto->$functionName();
                if ($val != null) {
                    if (NGS()->isJson($val)) {
                        $params[$db_fields[$i]] = json_decode($val, true);
                        continue;
                    }
                    $params[$db_fields[$i]] = $val;
                }
            }
            return ($params);
        }

    }

}
