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
use ngsadmin\managers\ProfessionsManager;

  class ProfessionsListLoad extends NgsAdminLoad {

    function load() {
      $args = array();
      if(NGS()->args()->getSorting()){
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if(NGS()->args()->getOrdering()){
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
      
      $professionsDtos = ProfessionsManager::getInstance()->getProfessions($args);
       
      $this->addParam("professionsDtos", $professionsDtos);
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/professions/professions_list.tpl";
    }

  }

}
