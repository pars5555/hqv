<?php

namespace ngsadmin\actions\export {

  use ngs\framework\AbstractAction;
  use ngsadmin\managers\UserManager;
  use ngsadmin\security\RequestGroups;

  class ExportUsersAction extends AbstractAction {

    public function service() {
      $args = array();
      if (NGS()->args()->getSorting()) {
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if (NGS()->args()->getOrdering()) {
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
      if (isset(NGS()->args()->export_filter)) {
        $args["filter"] = json_decode(NGS()->args()->export_filter, true);
      }

      $args['limit'] = 50000;
      $usersDtos = \ngsadmin\managers\UserManager::getInstance()->getUserWithSkinTypesAndSkinProblems($args);
      $this->outputCsv($usersDtos);
    }

    public function outputCsv($items) {
      $csvData = array();
      $csvData[0] = array('Id', 'Pharmacy', 'User Name', 'Email', 'Name', 'Last Name', 'Mobile', 'Gender', 'Nationality', 'Address1', 'Address2', 'Skin Types', 'Skin Problems', 'City', 'ZIP', 'Status', 'Date');
      $index = 1;
      foreach ($items as $item) {

        $csvData[$index][] = $item->getId();
        $csvData[$index][] = $item->getPharmacyName();
        $csvData[$index][] = $item->getUserName();
        $csvData[$index][] = $item->getEmail();
        $csvData[$index][] = $item->getFirstName();
        $csvData[$index][] = $item->getLastName();
        $csvData[$index][] = $item->getMobile();
        $csvData[$index][] = $item->getGender();
        $csvData[$index][] = $item->getNationality();
        $csvData[$index][] = $item->getAddress1();
        $csvData[$index][] = $item->getAddress2();
        $csvData[$index][] = $item->getSkinType();
        $csvData[$index][] = $item->getSkinProblem();
        $csvData[$index][] = $item->getCity();
        $csvData[$index][] = $item->getZip();
        $csvData[$index][] = $item->getStatus();
        $csvData[$index][] = $item->getAddedDate();
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
