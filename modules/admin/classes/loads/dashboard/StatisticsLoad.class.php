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

namespace admin\loads\dashboard {

    use admin\loads\ModeratorLoad;
    use admin\managers\AnalyzeManager;
    use admin\managers\RealVoterNumberManager;
    use admin\managers\RealVoterPassportManager;
    use hqv\managers\VoterDataManager;
    use NGS;

    class StatisticsLoad extends ModeratorLoad {

        public function load() {
            $dataCountGroupByVoter = VoterDataManager::getInstance()->getDataCountGroupByVoterId();
            $nonParticipantCounts = VoterDataManager::getInstance()->getNonParticipantCounts();
            $participantCounts = VoterDataManager::getInstance()->getParticipantCounts();

            $totalPassportDuplicationVotes = AnalyzeManager::getInstance()->getTotalPassportDuplicationVotes();
            $totalValidPassportVotesCount = RealVoterPassportManager::getInstance()->getTotalValidVotesCount();
            $totalNumberDuplicationVotes = AnalyzeManager::getInstance()->getTotalNumberDuplicationVotes();
            $totalValidNumberVotesCount = RealVoterNumberManager::getInstance()->getTotalValidVotesCount();


            $allAreaIdsMappedByTerritoryId = \hqv\managers\AreaManager::getInstance()->getAllAreaIdsMappedByTerritoryId();
            $allTerritoriesIds = array_keys($allAreaIdsMappedByTerritoryId);
            asort($allTerritoriesIds);
            $this->addJsonParam('allTerritoryIds', array_values($allTerritoriesIds)  );
            
            
            $passportTotalVotersCountByTerritoryId = [];
            $numberTotalVotersCountByTerritoryId = [];
            foreach ($allAreaIdsMappedByTerritoryId as $territoryId => $areaIdsArray) {
                $passportTotalVotersCountByTerritoryId ['t'.$territoryId] = RealVoterPassportManager::getInstance()->getTotalValidVotesCountInAreaIds($areaIdsArray);
                $numberTotalVotersCountByTerritoryId ['t'.$territoryId] = RealVoterNumberManager::getInstance()->getTotalValidVotesCountInAreaIds($areaIdsArray);
            }
            $this->addJsonParam('passportTotalVotersCountByTerritoryId', $passportTotalVotersCountByTerritoryId);
            $this->addJsonParam('numberTotalVotersCountByTerritoryId', $numberTotalVotersCountByTerritoryId);
            

            $this->addJsonParam("passportFake", $totalPassportDuplicationVotes);
            $this->addJsonParam("passportTotal", $totalValidPassportVotesCount);
            $this->addJsonParam("numberFake", $totalNumberDuplicationVotes);
            $this->addJsonParam("numberTotal", $totalValidNumberVotesCount);

            $this->addParam('countGroupByVoter', $dataCountGroupByVoter);
            $this->addParam('participantCounts', $participantCounts);
            $this->addParam('nonParticipantCounts', $nonParticipantCounts);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/statistics.tpl";
        }

    }

}
