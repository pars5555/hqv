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

    class SetWillParticipateAction extends BaseAction {

        public function service() {
            \hqv\managers\VoterManager::getInstance()->selectAdvance();
        }

    }

}
