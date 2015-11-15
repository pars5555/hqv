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
  use ngsadmin\managers\SkinProblemManager;

  class SkinProblemListLoad extends NgsAdminLoad {

    function load() {
      $args = array();
      if(NGS()->args()->getSorting()){
        $args["order_by"] = NGS()->args()->getSorting();
      }
      if(NGS()->args()->getOrdering()){
        $args["sort_by"] = NGS()->args()->getOrdering();
      }
      $skinProblemDtos = SkinProblemManager::getInstance()->getSkinProblems($args);
      $this->addParam("skinProblemDtos", $skinProblemDtos);
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/skinproblem/skin_problem_list.tpl";
    }

  }

}
