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
namespace ngsadmin\loads\pharmacy {

  use ngsadmin\loads\NgsAdminLoad;

  class PharmacyLoad extends NgsAdminLoad {

    function load() {
    
  
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.pharmacy.pharmacy_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "pharmacy";
    }

    public function getPageTitle() {
      return 'Pharmacy';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/pharmacy/pharmacy.tpl";
    }

  }

}
