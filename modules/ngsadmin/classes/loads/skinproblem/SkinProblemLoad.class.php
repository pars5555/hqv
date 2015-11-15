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
namespace ngsadmin\loads\skinproblem {

  use ngsadmin\loads\NgsAdminLoad;

  class SkinProblemLoad extends NgsAdminLoad {

    function load() {
      
    }
    
    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.skinproblem.skin_problem_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "skin_problem";
    }

    public function getPageTitle() {
      return 'Skin Problem';
    }
    
     public function getTemplate() {
      return NGS()->getTemplateDir()."/skinproblem/skin_problem.tpl";
    }

  }

}
