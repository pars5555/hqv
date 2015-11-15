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
use ngsadmin\managers\PharmacyManager;

  class PharmacyListLoad extends NgsAdminLoad {

    function load() {
      $args = array();
      if(NGS()->args()->getSorting()){
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if(NGS()->args()->getOrdering()){
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
     
      $pharmacyDtos = PharmacyManager::getInstance()->getPharmacyInfo($args);
       
      $this->addParam("pharmacyDtos", $pharmacyDtos);
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/pharmacy/pharmacy_list.tpl";
    }

  }

}
