<?php

namespace ngsadmin\managers {

  use Exception;
  use ngs\framework\AbstractManager;

  /**
   * TableManager class
   *
   * @author Vahagn Kirakosyan
   * @package managers
   * @version 1.0
   */
  class TableManager extends AbstractManager {

    /**
     * @var singleton instance of class
     */
    private static $instance = null;

    /**
     * Initializes DB mappers
     *
     * @param object $config
     * @param object $args
     * @return
     */
    function __construct() {

    }

    /**
     * Returns an singleton instance of this class
     *
     * @param object $config
     * @param object $args
     * @return
     */
    public static function getInstance() {

      if (self::$instance == null) {
        self::$instance = new TableManager();
      }
      return self::$instance;
    }

    public function initMapperInstance($table) {
      $mapper = $this->getMapperByTableName($table);
      $this->mapper = call_user_func(array("ngsadmin\\dal\\mappers\\".$mapper, 'getInstance'));
    }

    public function createDto() {
      return $this->mapper->createDto();
    }

    public function updateDto($dto) {
      return $this->mapper->updateByPK($dto);
    }

    public function insertDto($dto) {
      return $this->mapper->insertDto($dto);
    }

    public function deleteByPK($id) {
      return $this->mapper->deleteByPK($id);
    }

    private function getMapperByTableName($table) {
      $table = preg_replace_callback('/_(\w)/', function($match) {
        return strtoupper($match[1]);
      }, ucfirst($table));
      return $table.'Mapper';
    }

    public function getVisibleFieldSamples() {
      $sampleDto = $this->mapper->createDto();
      $visibleFieldSamples = array();
      foreach ($sampleDto->getMapArray() as $dbField => $dtoField) {
        $visibleFieldSamples[$dbField] = new VisibleFieldSample(ucfirst(str_replace('_', ' ', $dbField)), $dtoField, $dbField);
      }
      return $visibleFieldSamples;
    }

    public function getEditVisibleFieldSamples() {
      $tableColumnTypes = $this->mapper->getTableColumnTypes();
      $sampleDto = $this->mapper->createDto();
      $visibleFieldSamples = array();
      foreach ($sampleDto->getMapArray() as $dbField => $dtoField) {
        if ($dbField != $this->mapper->getPKFieldName()) {
          $type = $this->getFieldTypeByDbType($tableColumnTypes[$dbField]);
          $visibleFieldSamples[$dbField] = new VisibleFieldSample(ucfirst(str_replace('_', ' ', $dbField)), $dtoField, $dbField, $type);
        }
      }
      return $visibleFieldSamples;
    }

    public function getItems($params) {
      return $this->mapper->getTableItems($params);
    }

    public function getItemById($itemId) {
      return $this->mapper->selectByPK($itemId);
    }

    public function getAllItemsCount($params) {
      return $this->mapper->getAllItemsCount($params);
    }

    private function getFieldTypeByDbType($dbTypeArr) {
      $type = 'string';
      if (!empty($dbTypeArr['type'])) {
        switch ($dbTypeArr['type']) {
          case '1' :
          case '3' :
          case 'int' :
          case 'tinyint' :
          case 'mediumint' :
          case 'longint' :
            if ($dbTypeArr['type'] == 'tinyint' && $dbTypeArr['max_length'] == 1)
              $type = 'true_false';
            else
              $type = 'integer';
            break;
          case '254' :
          case 'string' :
          case 'enum' :
            if ($dbTypeArr['type'] != 'enum')
              $type = 'string';
            else
              $type = 'enum';
            break;
          case '252' :
          case 'blob' :
          case 'text' :
          case 'mediumtext' :
          case 'longtext' :
            $type = 'text';
            break;
          case '10' :
          case 'date' :
            $type = 'date';
            break;
          case '12' :
          case 'datetime' :
          case 'timestamp' :
            $type = 'datetime';
            break;
        }
      }
      return $type;
    }

    public function notEmpty($val) {
      if (isset($val) && strlen($val) > 0) {
        return $val;
      }
      throw new Exception("Input can not be empty");
    }

    public function validatePassword($val) {
      if (isset($val) && strlen($val) > 0) {
        return md5($val);
      }
      throw new Exception("Password can not be empty");
    }

    public function validateEmail($val) {
      if (filter_var($val, FILTER_VALIDATE_EMAIL)) {
        return $val;
      }
      throw new Exception("Please provide a valid email");
    }

    public function validateMobileNumber($val) {
      $specialChars = array(' ', '-', '.', '(', ')');
      $isOk = preg_match('/^[0-9'.implode('\\', $specialChars).']+$/', $val);
      if ($isOk) {
        return $val;
      }
      throw new Exception('Please provide a valid mobile number which contains digits and special chars: "'.implode(' ', $specialChars).'"');
    }

    public function getMatchedArrayBySearchKey($searchKey) {

      $matchedArrayBySearchKey = $this->mapper->getMatchedArrayBySearchKey($searchKey);

      if (!$matchedArrayBySearchKey) {
        throw new \ngs\framework\exceptions\NgsErrorException();
      }
      return $matchedArrayBySearchKey;

    }

  }

  class VisibleFieldSample {

    private $title;
    private $dtoFieldName;
    private $dbFieldName;
    private $getter;
    private $fieldType;
    private $fieldDefaultValue;
    private $options;
    private $relation;

    function __construct($title, $dtoFieldName, $dbFieldName, $fieldType = 'string') {
      $this->title = $title;
      $this->dtoFieldName = $dtoFieldName;
      $this->dbFieldName = $dbFieldName;
      $this->getter = 'get'.ucfirst($dtoFieldName);
      $this->setFieldType($fieldType);
    }

    public function getTitle() {
      return $this->title;
    }

    public function setTitle($title) {
      $this->title = $title;
    }

    public function setFieldDefaultValue($value) {
      $this->fieldDefaultValue = $value;
    }

    public function getFieldDefaultValue() {
      return $this->fieldDefaultValue;
    }

    public function getDtoFieldName() {
      return $this->dtoFieldName;
    }

    public function setDtoFieldName($dtoFieldName) {
      $this->dtoFieldName = $dtoFieldName;
    }

    public function getDbFieldName() {
      return $this->dbFieldName;
    }

    public function setDbFieldName($dbFieldName) {
      $this->dbFieldName = $dbFieldName;
    }

    public function getGetter() {
      return $this->getter;
    }

    public function setGetter($getter) {
      $this->getter = $getter;
    }

    public function getFieldType() {
      return $this->fieldType;
    }

    public function setFieldType($fieldType) {
      $sampleDto = TableManager::getInstance()->createDto();
      $options = '';
      if ($fieldType == "true_false" || $fieldType == "enum") {
        $dtoClass = get_class($sampleDto);
        $optionsGetterMethod = "get".ucfirst($this->getDtoFieldName())."Options";
        if (method_exists($dtoClass, $optionsGetterMethod)) {
          $options = $dtoClass::$optionsGetterMethod();
        } else {
          if ($fieldType == "true_false") {
            $options = array(0, 1);
          }
        }
      } else {
        $options = null;
      }
      $this->fieldType = $fieldType;

      $this->setOptions($options);
    }

    public function getOptions() {
      return $this->options;
    }

    public function setOptions($options) {

      if ($this->fieldType == 'true_false' || $this->fieldType == 'enum') {

        $this->options = $options;
      }
    }

    public function setRelation(array $relation) {
      if (isset($relation['table']) && isset($relation['field'])) {
        $getter = 'get'.ucfirst($relation['field']).'From'.ucfirst($relation['table']).'Table';
        $setter = 'set'.ucfirst($relation['field']).'From'.ucfirst($relation['table']).'Table';
        $relation['setter'] = $setter;
        $this->relation = $relation;
        $this->setGetter($getter);
      }
    }

    public function getRelation() {
      return $this->relation;
    }

  }

}
