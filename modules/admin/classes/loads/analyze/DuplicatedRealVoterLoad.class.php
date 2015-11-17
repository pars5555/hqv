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

namespace admin\loads\analyze {

    use admin\loads\BaseAdminLoad;
    use admin\managers\RealVoterManager;
    use NGS;

    class DuplicatedRealVoterLoad extends BaseAdminLoad {

        public function load() {
            $ids = NGS()->args()->ids;
            $duplidatedRows = RealVoterManager::getInstance()->selectAdvance('*', ['id', 'in', "($ids)"], ['create_datetime'], 'asc');
            $this->addParam('vote_count', count($duplidatedRows));
            $datetimesArray = $this->getDatetimesArray($duplidatedRows);
            $this->addParam('vote_datetimes', count($duplidatedRows));
            $this->addParam('datetimes', $datetimesArray);
            
            
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/analyze/duplicated_real_voter.tpl";
        }

        public function getDatetimesArray($duplidatedRows) {
            $ret=  [];
            foreach ($duplidatedRows as $duplidatedRow) {
                $ret[] = $duplidatedRow->getCreateDatetime();
                
            }
        }

    }

}
