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
use hqv\managers\VoterDataManager;
use NGS;

    class StatisticsLoad extends ModeratorLoad {

        public function load() {
            $dataCountGroupByVoter = VoterDataManager::getInstance()->getDataCountGroupByVoterId();
            $nonParticipantCounts = VoterDataManager::getInstance()->getNonParticipantCounts();
            $participantCounts = VoterDataManager::getInstance()->getParticipantCounts();
            $totalDuplicationVotes = AnalyzeManager::getInstance()->getTotalDuplicationVotes();
              $this->addJsonParam("aaa", rand(0, 5000));
            
            $this->addParam('countGroupByVoter', $dataCountGroupByVoter);
            $this->addParam('participantCounts', $participantCounts);
            $this->addParam('nonParticipantCounts', $nonParticipantCounts);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/dashboard/statistics.tpl";
        }

    }

}
