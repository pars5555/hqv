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
namespace ngsadmin\loads\skintype {

  use ngsadmin\loads\NgsAdminLoad;

  class SkinTypeLoad extends NgsAdminLoad {

    function load() {
      
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.skintype.skin_type_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "skin_type";
    }

    public function getPageTitle() {
      return 'Skin Types';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/skintype/skin_type.tpl";
    }

  }

}
