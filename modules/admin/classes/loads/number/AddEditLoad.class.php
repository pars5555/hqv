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

namespace admin\loads\number {

    use admin\loads\ModeratorLoad;
    use admin\managers\RealVoterNumberManager;
    use NGS;

    class AddEditLoad extends ModeratorLoad {

        public function load() {
            $voterNumber = "";
            if (isset(NGS()->args()->rowId)) {
                $realVoter = RealVoterNumberManager::getInstance()->selectByPK(NGS()->args()->rowId);
                if (!empty($realVoter)) {
                    $voterNumber = $realVoter->getAreaVoterId();
                    $this->addParam('edit', 1);
                    $this->addParam('row_id', NGS()->args()->rowId);
                }
            } else {

                $this->addParam('edit', 0);
            }
            $this->addParam('voterNumber', $voterNumber);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/number/add_edit.tpl";
        }

    }

}
    