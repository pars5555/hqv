<?php
/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package ngsadmin.loads.users
 * @version 1.0.0
 *
 */
namespace ngsadmin\loads\orderhistory {

  use ngsadmin\loads\NgsAdminLoad;

  class OrderHistoryLoad extends NgsAdminLoad {

    function load() {
     
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.orderhistory.order_history_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "order_history";
    }

    public function getPageTitle() {
      return 'Order History';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/orderhistory/order_history.tpl";
    }

  }

}
