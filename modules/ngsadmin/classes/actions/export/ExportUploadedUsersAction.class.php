<?php

namespace ngsadmin\actions\export {

  use ngs\framework\AbstractAction;
  use ngsadmin\managers\UserManager;
  use ngsadmin\security\RequestGroups;

  class ExportUploadedUsersAction extends AbstractAction {

    public function service() {
      if (!NGS()->getSessionManager()->getSessionParam('users')) {
        return;
      }
      $this->outputCsv(NGS()->getSessionManager()->getSessionParam('users'));
    }

    public function outputCsv($items) {
      $csvData = array();
      $csvData[0] = array('Id', 'Mobile', 'Pharmacy Id', 'User Name', 'Email', 'Name', 'Last Name');
      $index = 1;
      foreach ($items as $item) {

        $csvData[$index][] = $item->getId();
        $csvData[$index][] = $item->getMobile();
        $csvData[$index][] = $item->getPharmacyId();
        $csvData[$index][] = $item->getUserName();
        $csvData[$index][] = $item->getEmail();
        $csvData[$index][] = $item->getFirstName();
        $csvData[$index][] = $item->getLastName();
        $index++;
      }

      $fileName = 'export_users_'.date("Y_m_d_H_i_s").'.csv';
      header('Content-Type: text/csv');
      header('Content-Disposition: attachment; filename='.$fileName);

      $outstream = fopen("php://output", "w");
      foreach ($csvData as $rowData) {
        fputcsv($outstream, $rowData);
      }
      fclose($outstream);
      exit ;
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

  }

}
