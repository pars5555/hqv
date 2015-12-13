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

namespace admin\loads\prevoteanalyze {

    use admin\loads\AdminLoad;
    use hqv\managers\AreaManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class DuplicatedRealVoterLoad extends AdminLoad {

        public function load() {
            $ids = NGS()->args()->ids;
            $duplidatedRows = VoterDataManager::getInstance()->selectAdvance('*', ['id', 'in', "($ids)"], ['datetime'], 'asc');
            if (!empty($duplidatedRows)) {
                $voterData = $duplidatedRows[0];
                $voterId = $voterData->getVoterId();
                if ($voterId > 0) {
                    
                    $voter = VoterManager::getInstance()->selectByPK($voterId);
                    $areaId = $voter->getAreaId();
                    $area = AreaManager::getInstance()->selectByPK($areaId);
                    $this->addParam('area', $area);
                    $this->addParam('voter', $voter);
                }
                $this->addParam('voter_id', $voterId);
                $this->addParam('vote_count', count($duplidatedRows));
                $this->addParam('duplidatedRows', $duplidatedRows);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/prevoteanalyze/duplicated_real_voter.tpl";
        }

        public function getAreaIdsArray($duplidatedRows) {
            $ret = [];
            foreach ($duplidatedRows as $row) {
                $ret[] = $row->getAreaId();
            }
            return $ret;
        }

    }

}
