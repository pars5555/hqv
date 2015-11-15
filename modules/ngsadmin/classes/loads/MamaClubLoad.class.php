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
namespace ngsadmin\loads\registers {


use ngsadmin\loads\NgsAdminLoad;

  class MamaClubLoad extends NgsAdminLoad {

    function load() {
    
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/registers/mama_club.tpl";
    }

  }

}
