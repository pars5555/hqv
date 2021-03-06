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
    use hqv\managers\VoterManager;
    use NGS;

    class TwoLoad extends AdminLoad {

        public function load() {
            $willVoteVoters = VoterDataManager::getInstance()->selectAdvance('*', ['will_vote', '=', 1]);
           
            $voterIdsArray = $this->getVoterIdsArray($willVoteVoters);
            $voterIdsArraySql = "(" . implode(',', $voterIdsArray) . ")";
            $realVotersPassport = RealVoterPassportManager::getInstance()->selectAdvance('*', ['voter_id', '>', '0', 'and', 'voter_id', 'in', $voterIdsArraySql]);
            $gnacacneriVoterIds = $this->getVoterIdsArray($realVotersPassport);
            $retVoterIds = array_diff($voterIdsArray, $gnacacneriVoterIds);
            $rows = VoterManager::getInstance()->selectByPKs($retVoterIds);
            $this->addParam("rows", $rows);
            $this->addParam("count", count($rows));
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
            return NGS()->getTemplateDir() . "/report/two.tpl";
        }

    }

}
