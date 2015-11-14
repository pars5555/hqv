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

    class AboutLoad extends NgsLoad {

        public function load() {
            
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/main/about.tpl";
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
