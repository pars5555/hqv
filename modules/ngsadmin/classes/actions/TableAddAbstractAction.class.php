<?php

use ngsadmin\actions\TableModifyAbstractAction;
use ngsadmin\managers\TableManager;

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions {

    abstract class TableAddAbstractAction extends TableModifyAbstractAction {

        public function service() {

            $dto = $this->getValidatedDto();

            $tableManager = \ngsadmin\managers\TableManager::getInstance();
            $id = $tableManager->insertDto($dto);

            if ($id) {
                $dto->setId($id);
                if (method_exists($this, 'onItemAdd')) {
                    $this->onItemAdd($dto);
                }
                echo json_encode(array('status' => 'ok', 'id' => $id));
                exit;
            } else {
                $this->addError('general_err', 'Insert failed.');
            }
            $this->showErrors();
        }

        protected function getValidatedDto() {
            $tableManager = \ngsadmin\managers\TableManager::getInstance();
            $dto = $tableManager->createDto();

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
                        NGS()->args()->{$field} = $this->$callback(NGS()->args()->{$field});
                    } catch (Exception $e) {

                        $this->addError($field, $e->getMessage());
                    }
                }
            }
            $errors = $this->getErrors();
            if (empty($errors)) {
                return $dto;
            }
            throw new \ngs\framework\exceptions\NgsErrorException($errors);
        }

    }

}