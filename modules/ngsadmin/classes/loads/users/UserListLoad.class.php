<?php

/**
 * @author Levon Naghashyan
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2015
 * @package ngsadmin.loads.users
 * @version 1.0.0
 *
 */

namespace ngsadmin\loads\users {

    use ngsadmin\loads\NgsAdminLoad;
    use ngsadmin\managers\UserManager;

    class UserListLoad extends NgsAdminLoad {

        function load() {
            $limit = 10;
            if (is_numeric(NGS()->args()->getLimit())) {
                $limit = NGS()->args()->getLimit();
            }
            $page = 1;
            if (is_numeric(NGS()->args()->getPage())) {
                $page = NGS()->args()->getPage();
            }
            $offset = $limit * ($page - 1);
            $args = array();
            $args["limit"] = $limit;
            $args["offset"] = $offset;
            if (NGS()->args()->getSorting()) {
                $args["order_by"] = NGS()->args()->getSorting();
            }
            if (NGS()->args()->getOrdering()) {
                $args["sort_by"] = NGS()->args()->getOrdering();
            }
            if (NGS()->args()->search_key) {
                $args["search_key"] = NGS()->args()->search_key;
            }
            if (NGS()->args()->search_type) {
                $args["search_type"] = NGS()->args()->search_type;
            }
            $args["filter"] = array();
            if (NGS()->args()->filter) {
                $filterData = json_decode(NGS()->args()->filter);
                if (isset($filterData->filter)) {
                    $args["filter"] = (array) $filterData->filter;
                }
            }

            $userDtos = UserManager::getInstance()->getUserWithSkinTypesAndSkinProblems($args);
            $userCount = UserManager::getInstance()->getUserCount($args);

            $this->initPaging($page, $userCount, $limit, 10);
            $this->addParam("userDtos", $userDtos);
        }

        public function getTemplate() {
            return NGS()->getTemplateDir() . "/users/user_list.tpl";
        }

    }

}
