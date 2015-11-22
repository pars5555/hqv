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

            $this->addJsonParam("passportFake", $totalPassportDuplicationVotes );
            $this->addJsonParam("passportTotal", $totalValidPassportVotesCount );
            $this->addJsonParam("numberFake", $totalNumberDuplicationVotes );
            $this->addJsonParam("numberTotal", $totalValidNumberVotesCount );

            $this->addParam('countGroupByVoter', $dataCountGroupByVoter);
            $this->addParam('participantCounts', $participantCounts);
            $this->addParam('nonParticipantCounts', $nonParticipantCounts);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/statistics.tpl";
        }

    }

}
