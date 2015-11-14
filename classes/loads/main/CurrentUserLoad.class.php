<?php

/**
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2010-2015
 * @package loads.site.main
 * @version 2.0.0
 */

namespace hqv\loads\main {

    use hqv\loads\NgsLoad;
    use hqv\security\RequestGroups;
    use NGS;

    class CurrentUserLoad extends NgsLoad {

        public function load() {
            if (!isset(NGS()->args()->hash)) {
                return;
            }
            $hash = NGS()->args()->hash;
            $voter = \hqv\managers\VoterManager::getInstance()->getByHash($hash);
            if (isset($voter)) {
                $this->addParam('voter', $voter);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/current_user.tpl";
        }

        public function getRequestGroup() {
            RequestGroups::$guestRequest;
        }

    }

}
