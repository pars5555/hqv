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
namespace ngsadmin\loads\users {

  use ngsadmin\loads\NgsAdminLoad;
  use bclub\managers\SkinProblemManager;
  use bclub\managers\SkinTypeManager;

  class UserLoad extends NgsAdminLoad {

    function load() {
      $skinTypesDtos = SkinTypeManager::getInstance()->getAllSkinTypes();
      $skinProblemsDtos = SkinProblemManager::getInstance()->getAllSkinProblems();
      $this->addParam("skinTypesDtos", $skinTypesDtos);
      $this->addParam("skinProblemsDtos", $skinProblemsDtos);
    }

    public function getDefaultLoads() {
      $loads = array();
      $loads["list"]["action"] = "ngsadmin.loads.users.user_list";
      $loads["list"]["args"] = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "users";
    }

    public function getPageTitle() {
      return 'Users';
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/users/user.tpl";
    }

  }

}
