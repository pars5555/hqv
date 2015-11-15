<?php

/**
 * @author Vahagn Kirakosyan
 */

namespace ngsadmin\actions {

  use ngsadmin\managers\TableManager;
  use ngs\framework\exceptions\NgsErrorException;

  abstract class TableDeleteAbstractAction extends TableModifyAbstractAction {

    public function service() {
        
      if (!is_numeric(NGS()->args()->getItemId())) {
        throw new NgsErrorException("Delete failed.");
      }
      $tableManager = TableManager::getInstance();
      $dto = $tableManager->getItemById(NGS()->args()->getItemId());
      if (!$dto) {
        throw new NgsErrorException("Item does not exist.");
      }
      $deleted = $tableManager->deleteByPK(NGS()->args()->getItemId());
      if (is_numeric($deleted)) {
        if (method_exists($this, 'onItemDelete')) {
          $this->onItemDelete($dto);
        }

      }
    }

  }

}
