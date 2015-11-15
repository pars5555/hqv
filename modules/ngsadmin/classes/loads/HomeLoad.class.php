<?php

use ngsadmin\loads\BaseAdminLoad;

/**
 *
 * @author Vahagn Sookiasian
 *
 */

namespace ngsadmin\loads {

  class HomeLoad extends BaseAdminLoad {

    public function load() {

      $this->addJsonParam("gago", "valod");
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/home.tpl";
    }

  }

}
