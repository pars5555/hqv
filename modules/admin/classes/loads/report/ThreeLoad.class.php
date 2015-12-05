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

namespace admin\loads\report {

    use admin\loads\AdminLoad;
    use admin\managers\RealVoterPassportManager;
    use hqv\managers\VoterDataManager;
    use NGS;

    class ThreeLoad extends AdminLoad {

        public function load() {
            $willNotVoteVoters = VoterDataManager::getInstance()->selectAdvance('*', ['is_death', '=', 0]);
            $voterIdsArray = $this->getVoterIdsArray($willNotVoteVoters);
            $voterIdsArraySql = "(" . implode(',', $voterIdsArray) . ")";
            $realVotersPassport = RealVoterPassportManager::getInstance()->selectAdvance('*', ['voter_id', 'in', $voterIdsArraySql]);
            $this->addParam("rows", $realVotersPassport);
        }

        private function getVoterIdsArray($dtos) {
            $ret = [];
            foreach ($dtos as $dto) {
                if ($dto->getVoterId() > 0) {
                    $ret [] = $dto->getVoterId();
                }
            }
            return $ret;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/report/three.tpl";
        }

    }

}
