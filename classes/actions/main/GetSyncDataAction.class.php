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
            if (isset(NGS()->args()->row_id)) {
                $rowId = NGS()->args()->row_id;
            }else{
                $rowId = 0;
            }
            if (isset(NGS()->args()->em_row_id)) {
                $emRowId = NGS()->args()->em_row_id;
            }else{
                $emRowId = 0;
            }
            $rows = \hqv\managers\VoterDataManager::getInstance()->selectAdvance('*', ['id', '>', "'$rowId'"], ['id'], 'ASC');
            $emrows = \hqv\managers\EmergencyPhoneNumberManager::getInstance()->selectAdvance('*', ['id', '>', "'$rowId'"], ['id'], 'ASC');
            $this->addParam('data', $rows);
            $this->addParam('em_data', $emrows);
        }

    }

}
