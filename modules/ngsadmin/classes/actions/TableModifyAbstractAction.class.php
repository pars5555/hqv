<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions {

    use bclub\security\RequestGroups;
    use ngs\framework\AbstractAction;
    use ngsadmin\managers\TableManager;
    use ngsadmin\managers\VisibleFieldSample;

    abstract class TableModifyAbstractAction extends AbstractAction {

        private $errors = array();
        private $validateCallbacks = array();

        function __construct() {
            $tableManager = TableManager::getInstance();
            $tableManager->initMapperInstance($this->getTableName());
        }

        protected function validateRequestParam(VisibleFieldSample $visibleFieldSample) {
            $dbFieldName = $visibleFieldSample->getDbFieldName();
            $fieldType = $visibleFieldSample->getFieldType();
            $validateCallback = $this->getValidateCallback($dbFieldName);

            if ($validateCallback) {
                try {
                    $_REQUEST[$dbFieldName] = $this->$validateCallback($_REQUEST[$dbFieldName]);
                } catch (Exception $e) {
                    $this->addError($dbFieldName, $e->getMessage());
                }
            }
            if (isset($_REQUEST[$dbFieldName])) {
                if ($fieldType == 'true_false' || $fieldType == 'enum') {
                    if (array_key_exists($_REQUEST[$dbFieldName], $visibleFieldSample->getOptions())) {
                        return $_REQUEST[$dbFieldName];
                    } else {
                        $this->addError($dbFieldName, 'Please select valid option.');
                    }
                } elseif ($fieldType == 'integer') {
                    if (is_numeric($_REQUEST[$dbFieldName])) {
                        return intval($_REQUEST[$dbFieldName]);
                    } else {
                        $this->addError($dbFieldName, 'Please input numeric value.');
                    }
                } elseif ($fieldType == 'date') {
                    $_REQUEST[$dbFieldName] = str_replace('/', '-', $_REQUEST[$dbFieldName]);
                    if (strtotime($_REQUEST[$dbFieldName]) !== false) {
                        return date("Y-m-d", strtotime($_REQUEST[$dbFieldName]));
                    } else {
                        $this->addError($dbFieldName, 'Please input valid date.');
                    }
                } elseif ($fieldType == 'datetime') {
                    $_REQUEST[$dbFieldName] = str_replace('/', '-', $_REQUEST[$dbFieldName]);
                    if (strtotime($_REQUEST[$dbFieldName]) !== false) {
                        return date("Y-m-d H:i:s", strtotime($_REQUEST[$dbFieldName]));
                    } else {
                        $this->addError($dbFieldName, 'Please input valid datetime.');
                    }
                } else {
                    if (is_string($_REQUEST[$dbFieldName])) {
                        return $_REQUEST[$dbFieldName];
                    } else {
                        $this->addError($dbFieldName, 'Please input valid string.');
                    }
                }
            }
        }

        protected function addValidateCallback($fieldName, $validateFunctionName) {
            $this->validateCallbacks[$fieldName] = $validateFunctionName;
        }

        protected function getValidateCallbacks() {
            return $this->validateCallbacks;
        }

        protected function getValidateCallback($fieldName) {
//            var_dump($fieldName, $this->validateCallbacks);
            if (isset($this->validateCallbacks[$fieldName])) {
                return $this->validateCallbacks[$fieldName];
            }
        }

        protected function addError($field, $message) {
            $this->errors[$field] = $message;
        }

        protected function getErrors() {
            return $this->errors;
        }

        protected function showErrors() {
            $errorParams['status'] = "err";
            $errorParams['data'] = $this->getErrors();
            throw new \ngs\framework\exceptions\NgsErrorException('', -1, $errorParams);
        }

        /*         * ************************ validate functions ******************* */

        protected function notEmpty($val) {
            $tableManager = TableManager::getInstance();
            return $tableManager->notEmpty($val);
        }

        protected function validatePassword($val) {
            $tableManager = TableManager::getInstance();
            return $tableManager->validatePassword($val);
        }

        protected function validateEmail($val) {
            $tableManager = TableManager::getInstance();
            return $tableManager->validateEmail($val);
        }

        protected function validateMobileNumber($val) {
            $tableManager = TableManager::getInstance();
            return $tableManager->validateMobileNumber($val);
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
