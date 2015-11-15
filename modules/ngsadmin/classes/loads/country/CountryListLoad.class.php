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
use ngsadmin\managers\CountryManager;

  class CountryListLoad extends NgsAdminLoad {

    function load() {
      $args = array();
      if(NGS()->args()->getSorting()){
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if(NGS()->args()->getOrdering()){
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
     
      $countryDtos = CountryManager::getInstance()->getCountryInfo($args);
       
      $this->addParam("countryDtos", $countryDtos);
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/country/country_list.tpl";
    }

  }

}
