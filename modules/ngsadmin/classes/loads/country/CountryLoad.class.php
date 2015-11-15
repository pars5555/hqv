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
namespace ngsadmin\loads\country {

  use ngsadmin\loads\NgsAdminLoad;

  class CountryLoad extends NgsAdminLoad {

    function load() {
    
  
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.country.country_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "country";
    }

    public function getPageTitle() {
      return 'Country';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/country/country.tpl";
    }

  }

}
