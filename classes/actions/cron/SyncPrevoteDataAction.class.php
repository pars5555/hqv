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

namespace hqv\actions\cron {

use hqv\actions\BaseAction;

    class SyncPrevoteDataAction extends BaseAction {

        public function service() {
            \hqv\managers\VoterDataManager::getInstance()->addRow(12, 'pars5555@yaho.com', 123, 1, 1, 'localhost', 'Armenia', 'chrome', '11', 'windows') ;
        }

    }

}
