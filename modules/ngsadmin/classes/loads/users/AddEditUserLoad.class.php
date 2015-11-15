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

namespace ngsadmin\loads\users {

    use ngsadmin\loads\NgsAdminLoad;
    use ngsadmin\managers\UserManager;
    use bclub\managers\CountryManager;
    use bclub\managers\SkinProblemManager;
    use bclub\managers\SkinTypeManager;

    class AddEditUserLoad extends NgsAdminLoad {

        function load() {
            $tempUserDto = null;
            if (NGS()->args()->getItemId() && is_numeric(NGS()->args()->getItemId())) {
                $itemDto = UserManager::getInstance()->getUserById(NGS()->args()->getItemId());
                if ($itemDto->getTempUserId()) {
                    $tempUserDto = UserManager::getInstance()->getTempUserById($itemDto->getTempUserId());
                    $tempSkinTypesDtos = SkinTypeManager::getInstance()->getAllWithTempUserByUserId(NGS()->args()->getItemId());
                    $tempSkinProblemsDtos = SkinProblemManager::getInstance()->getAllWithTempUserByUserId(NGS()->args()->getItemId());


                    $this->addJsonParam("temp_user", $itemDto->getTempUserId());
                    $this->addParam("tempSkinTypesDtos", $tempSkinTypesDtos);
                    $this->addParam("tempSkinProblemsDtos", $tempSkinProblemsDtos);
                }
                $skinTypesDtos = SkinTypeManager::getInstance()->getAllWithUserByUserId(NGS()->args()->getItemId());
                $skinProblemsDtos = SkinProblemManager::getInstance()->getAllWithUserByUserId(NGS()->args()->getItemId());
            } else {
                $itemDto = UserManager::getInstance()->createDtoFromArgs(array());
                $skinTypesDtos = SkinTypeManager::getInstance()->getAllSkinTypes();
                $skinProblemsDtos = SkinProblemManager::getInstance()->getAllSkinProblems();
            }
            $countryDtos = CountryManager::getInstance()->getAllCountries();

            $professions = \ngsadmin\managers\ProfessionsManager::getInstance()->getProfessions();
            $this->addParam("professions", $professions);
            $this->addParam("tempUserDto", $tempUserDto);
            $this->addParam("countryDtos", $countryDtos);
            $this->addParam("skinTypesDtos", $skinTypesDtos);
            $this->addParam("skinProblemsDtos", $skinProblemsDtos);
            $this->addParam("itemDto", $itemDto);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/users/add_edit_list.tpl";
        }

    }

}
