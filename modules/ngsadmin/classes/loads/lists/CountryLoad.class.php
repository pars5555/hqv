<?php

namespace ngsadmin\loads\lists {

use ngsadmin\loads\TableListAbstractLoad;
    
class CountryLoad extends TableListAbstractLoad{
   
        
    function load() {
        $this->renderTable();
    }

    public function getTableName() {
        return "country";
    }

    public function getPageTitle() {
        return 'Country';
    }

}
}
