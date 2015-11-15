<?php
namespace ngsadmin\loads {

  class MainLoad extends NgsAdminLoad {

    public function load() {
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/main.tpl";
    }

  }

}
