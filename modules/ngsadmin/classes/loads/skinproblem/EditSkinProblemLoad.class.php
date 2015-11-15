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

    class EditSkinProblemLoad extends NgsAdminLoad {

        function load() {
            $skinId = NGS()->args()->getItemId();
            $skinProblemManager = \ngsadmin\managers\SkinProblemManager::getInstance();
            $skinProblemDto = $skinProblemManager->getDescriptionById($skinId);
            $this->addParam('itemDto', $skinProblemDto);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/skinproblem/edit_skin_problem.tpl";
        }

    }

}
