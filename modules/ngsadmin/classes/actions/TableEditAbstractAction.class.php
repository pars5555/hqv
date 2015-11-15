<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions {

use ngsadmin\managers\TableManager;

    abstract class TableEditAbstractAction extends TableModifyAbstractAction {

        public function service() {

            $dto = $this->getValidatedDto();

            $tableManager = TableManager::getInstance();
            $updated = $tableManager->updateDto($dto);
            var_dump($updated);exit;
            if ($updated == -1) {
                throw new \ngs\framework\exceptions\NgsErrorException('Unable to update Item,Please try later');
            } else {
                if (method_exists($this, 'onItemUpdate')) {
                    $this->onItemUpdate($dto);
                }
              
            }
            $this->showErrors();
        }

        protected function getValidatedDto() {
            $tableManager = TableManager::getInstance();

            $dto = $tableManager->getItemById(NGS()->args()->id);
            if (!$dto) {
                $this->addError('general_err', "Item does not exist.");
                $this->showErrors();
            }
            $visibleFieldsSamples = $tableManager->getEditVisibleFieldSamples();
            $callbacks = $this->getValidateCallbacks();

            foreach ($visibleFieldsSamples as $visibleFieldSample) {
                $val = $this->validateRequestParam($visibleFieldSample);
                
                if (isset($val)) {
                    $setter = "set" . ucfirst($visibleFieldSample->getDtoFieldName());
                    $dto->$setter($val);
                }
                unset($callbacks[$visibleFieldSample->getDbFieldName()]);
            }

            if (!empty($callbacks)) {
                foreach ($callbacks as $field => $callback) {
                    try {


                        $field = $this->$callback($_REQUEST[$field]);
                    } catch (Exception $e) {
                        $this->addError($field, $e->getMessage());
                    }
                }
            }
            $errors = $this->getErrors();
            if (empty($errors)) {
                return $dto;
            }
            $this->showErrors();
        }

    }

}