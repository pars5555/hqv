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
    use hqv\managers\AreaManager;
    use hqv\managers\VoterDataManager;
    use hqv\managers\VoterManager;
    use hqv\security\RequestGroups;
    use NGS;

    class ThankYouLoad extends NgsLoad {

        public function load() {
            if (!isset(NGS()->args()->hash)) {
                return;
            }
            $hash = NGS()->args()->hash;
            $voter = VoterManager::getInstance()->getByHash($hash);
            if (isset($voter)) {
                $this->addParam('voter', $voter);
            }
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/thank_you.tpl";
        }

        public function getRequestGroup() {
            RequestGroups::$guestRequest;
        }

    }

}
