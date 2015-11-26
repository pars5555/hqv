<?php

/**
 * main site action for all ngs site's actions
 *
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2009-2014
 * @package actions.site
 * @version 6.0
 *
 */

namespace hqv\actions\main {

    use hqv\actions\BaseAction;

    class GetSyncDataAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->pasphrase) || NGS()->args()->pasphrase != 'P@rs1985') {
                return false;
            }
            if (isset(NGS()->args()->datetime)) {
                $datetime = NGS()->args()->datetime;
            }else{
                $datetime = '2015-01-01';
            }
            $rows = \hqv\managers\VoterDataManager::getInstance()->selectAdvance('*', ['datetime', '>=', "'$datetime'"], ['datetime'], 'DESC');
            $this->addParam('data', $rows);
        }

    }

}
