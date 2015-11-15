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


use ngsadmin\managers\RegisterPagesManager;
use ngsadmin\loads\NgsAdminLoad;

  class MamaClubLoad extends NgsAdminLoad {

    function load() {
        $page = 'mama_club';
        $manager = RegisterPagesManager::getInstance();
        $pageImages = $manager->getPageImages($page);
        if(is_array($pageImages) && !empty($pageImages)){
            $this->addParam('imagesUrls', $pageImages);
        }
         $description = $manager->getDescription($page);
           
            if ($description) {
                $this->addParam('description', $description);
            }
    }

    public function getTemplate() {
      return NGS()->getTemplateDir()."/registers/mama_club.tpl";
    }

  }

}
