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

namespace admin\loads\passanalyze {

    use admin\loads\AdminLoad;
    use admin\managers\RealVoterPassportManager;
    use hqv\managers\AreaManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use NGS;

    class DuplicatedRealVoterLoad extends AdminLoad {

        public function load() {
            $ids = NGS()->args()->ids;
            $duplidatedRows = RealVoterPassportManager::getInstance()->selectAdvance('*', ['id', 'in', "($ids)"], ['create_datetime'], 'asc');
            if (!empty($duplidatedRows)) {
                $passVoter = $duplidatedRows[0];
                $voterId = $passVoter->getVoterId();
                if ($voterId > 0) {
                    $prevoteData = VoterDataManager::getInstance()->selectByField('voter_id', $voterId);
                    if (!empty($prevoteData)) {
                        $this->addParam('prevoteData', $prevoteData);
                    }
                    $voter = VoterManager::getInstance()->selectByPK($voterId);
                    $areaId = $voter->getAreaId();
                    $area = AreaManager::getInstance()->selectByPK($areaId);
                    $this->addParam('area', $area);
                    $this->addParam('voter', $voter);
                }
                $this->addParam('voter_id', $voterId);
                $this->addParam('vote_count', count($duplidatedRows));
                $areaIdsArray = $this->getAreaIdsArray($duplidatedRows);
                $areasMappedById = AreaManager::getInstance()->selectbyPKs($areaIdsArray, true);
                $this->addParam('duplidatedRows', $duplidatedRows);
                $this->addParam('areasMappedById', $areasMappedById);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/passanalyze/duplicated_real_voter.tpl";
        }

        public function getAreaIdsArray($duplidatedRows) {
            $ret = [];
            foreach ($duplidatedRows as $row) {
                if ($row->getAreaId()>0){
                $ret[] = $row->getAreaId();
                }
            }
            return $ret;
        }

    }

}
