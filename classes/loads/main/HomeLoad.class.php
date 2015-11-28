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

    use NGS;
    use hqv\loads\NgsLoad;
    use hqv\security\RequestGroups;

    class HomeLoad extends NgsLoad {

        public function load() {
            list($minBirthDate, $maxBirthDate) = \hqv\managers\VoterManager::getInstance()->getMaxAndMinBirthDates();
            $this->addJsonParam('minBirthDate', $minBirthDate);
            $this->addJsonParam('maxBirthDate', $maxBirthDate);
            $this->addJsonParam('closeText', $this->getPhrase(50));
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/home.tpl";
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
