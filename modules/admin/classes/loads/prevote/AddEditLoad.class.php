<?php

/**
 * NGS demo load for demostration subdomain module structure
 * this class extends from AbstractLoad class
 *
 * this load can called from browser using demosubdomain.*
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @year 2015
 * @version 2.0.0
 * @package loads.demomodule.main
 * @copyright Naghashyan Solutions LLC
 *
 */

namespace admin\loads\prevote {

    use admin\loads\ModeratorLoad;
    use admin\managers\RealVoterPassportManager;
    use NGS;

    class AddEditLoad extends ModeratorLoad {

        public function load() {
            $firstName = "";
            $lastName = "";
            $fatherName = "";
            $birthYear = 1950;
            $birthMonth = 0;
            $birthDay = 0;
            if (isset(NGS()->args()->rowId)) {
                $realVoter = RealVoterPassportManager::getInstance()->selectByPK(NGS()->args()->rowId);
                if (isset($realVoter)) {
                    $firstName = $realVoter->getFirstName();
                    $lastName = $realVoter->getLastName();
                    $fatherName = $realVoter->getFatherName();
                    $birthDate = $realVoter->getBirthDate();
                    if (!empty($birthDate)) {
                        $dateParts = explode('-', $birthDate);
                        $birthYear = $dateParts [0];
                        $birthMonth = $dateParts [1];
                        $birthDay = $dateParts [2];
                    }
                    $this->addParam('edit', 1);
                    $this->addParam('row_id', NGS()->args()->rowId);
                }
            } else {

                $this->addParam('edit', 0);
            }
            $this->addParam('first_name', $firstName);
            $this->addParam('last_name', $lastName);
            $this->addParam('father_name', $fatherName);
            $this->addParam('birth_year', $birthYear);
            $this->addParam('birth_month', $birthMonth);
            $this->addParam('birth_day', $birthDay);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/prevote/add_edit.tpl";
        }

    }

}
    