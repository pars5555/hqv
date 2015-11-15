<?php

namespace ngsadmin\loads {

  use ngsadmin\managers\TableManager;

  /**
   *
   * @author Vahagn Kirakosyan
   *
   */
  abstract class TableEditAbstractLoad extends TableAbstractLoad {

    public function load() {
      if (isset($_REQUEST['itemId']) && is_numeric($_REQUEST['itemId']) && $_REQUEST['itemId'] > 0) {
        $itemId = intval($_REQUEST['itemId']);
      } else {
        throw new Exception("Invalid Params", 1);
      }
      $tableManager = TableManager::getInstance();
      $dto = $tableManager->getItemById($itemId);

      $this->addParam('visibleFieldSamples', $this->visibleFieldSamples);
      $this->addParam('item', $dto);
      if (method_exists($this, 'afterEditLoad')) {
        $this->afterEditLoad($dto);
      }
    }

    public function getVisibleFieldSamples() {
      $tableManager = TableManager::getInstance();
      return $tableManager->getEditVisibleFieldSamples();
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/table_edit.tpl";
    }

  }

}
