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
namespace ngsadmin\loads\professions {

  use ngsadmin\loads\NgsAdminLoad;

  class ProfessionsLoad extends NgsAdminLoad {

    function load() {
    
  
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.professions.professions_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "professions";
    }

    public function getPageTitle() {
      return 'Professions';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/professions/professions.tpl";
    }

  }

}
