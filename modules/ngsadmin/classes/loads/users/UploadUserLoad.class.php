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

  class UploadUserLoad extends NgsAdminLoad {

    function load() {
    }

    public function getDefaultLoads() {
      $loads = array();
      return $loads;
    }

    public function getActiveMenu() {
      return "users";
    }

    public function getPageTitle() {
      return 'Users';
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/users/upload_user.tpl";
    }

  }

}
