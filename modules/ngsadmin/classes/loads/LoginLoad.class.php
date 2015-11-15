<?php
/**
 *
 * NGS admin login
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package ngsadmin.loads
 * @version 1.0.0
 *
 */
namespace ngsadmin\loads {
  
  use ngs\framework\AbstractLoad;
  use bclub\security\RequestGroups;
  
  class LoginLoad extends AbstractLoad {

    public function load() {
    }

    public function getRequestGroup() {
      return RequestGroups::$guestRequest;
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/login.tpl";
    }

  }

}
