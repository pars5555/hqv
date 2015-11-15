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

    class EditSkinTypeLoad extends NgsAdminLoad {

        function load() {
            $skinId = NGS()->args()->getItemId();
            $skinTypeManager = SkinTypeManager::getInstance();
            $skinTypeDto = $skinTypeManager->getDescriptionById($skinId);
            $this->addParam('itemDto', $skinTypeDto);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/skintype/edit_skin_type.tpl";
        }

    }

}
