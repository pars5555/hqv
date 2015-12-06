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
    use admin\managers\RealVoterNumberManager;
    use hqv\managers\AreaManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class OneLoad extends AdminLoad {

        public function load() {
            $willNotVoteVoters = VoterDataManager::getInstance()->selectAdvance('*', ['will_vote', '=', 0]);
            $voterIdsArray = $this->getVoterIdsArray($willNotVoteVoters);
            $voterIdsArraySql = "(" . implode(',', $voterIdsArray) . ")";
            $realVoters = RealVoterNumberManager::getInstance()->selectAdvance('*', ['voter_id', '>', 0, 'and', 'voter_id', 'in', $voterIdsArraySql]);
            $voterIdsArray = $this->getVoterIdsArray($realVoters);
            $areaIdsArray = $this->getAreaIdsArray($realVoters);
            $voters = VoterManager::getInstance()->selectByPKs($voterIdsArray, true);
            $areas = AreaManager::getInstance()->selectByPKs($areaIdsArray, true);

            $prevotDatas = [];
            array_unique($voterIdsArray);
            foreach ($voterIdsArray as $voterId) {
                $prevotDatas[$voterId] = VoterDataManager::getInstance()->selectAdvance('*', ['voter_id', '=', $voterId]);
            }
            $this->addParam("rows", $realVoters);
            $this->addParam("voters", $voters);
            $this->addParam("areas", $areas);
            $this->addParam("prevotDatas", $prevotDatas);
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

        private function getAreaIdsArray($dtos) {
            $ret = [];
            foreach ($dtos as $dto) {
                if ($dto->getAreaId() > 0) {
                    $ret [] = $dto->getAreaId();
                }
            }
            return $ret;
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/report/one.tpl";
        }

    }

}
