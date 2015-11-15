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
  use ngsadmin\managers\SkinTypeManager;

  class SkinTypeListLoad extends NgsAdminLoad {

    function load() {
      $args = array();
      if(NGS()->args()->getSorting()){
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if(NGS()->args()->getOrdering()){
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
      $skinTypeDtos = SkinTypeManager::getInstance()->getSkinTypes($args);
      $this->addParam("skinTypeDtos", $skinTypeDtos);
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/skintype/skin_type_list.tpl";
    }

  }

}
