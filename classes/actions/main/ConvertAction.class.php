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

    class ConvertAction extends BaseAction {

        public function service() {
            

            
            set_time_limit(500000);
            /* $fileContent = file_get_contents(NGS()->getRootDirByModule('ngs'). '/' .DATA_DIR . '/111.xml');
              for ($i=1;$i<=1984;$i++)
              {
              $xlsFileName = "D:\\xampp\\htdocs\\hqv\\data\\xls\\($i).xls";
              $fileContentReplaced =str_replace('{filename}', $xlsFileName, $fileContent);
              file_put_contents("D:\\xampp\\htdocs\\hqv\\data\\222.xml", $fileContentReplaced);
              exec('"C:\\Program Files\\SQLyog\\SJA.exe" D:\\xampp\\htdocs\\hqv\\data\\222.xml"');
              var_dump($i);
              }
              exit; */
            /* $offset = 0;
              while (true) {
              $allData = \hqv\managers\DataManager::getInstance()->selectAdvance('*', [], [], null, $offset, 5000);
              if (empty($allData ))
              {
              break;
              }
              $offset += 5000;
              foreach ($allData as $row) {
              \hqv\managers\DataOkManager::getInstance()->addRow(
              $row->F1, $row->F2, $row->F3, $row->F4, $row->F5, $row->F6, $row->F7, $row->F8);
              }
              } */
            /*$offset = 0;
            $limit= 5000;
            while (true) {
                $allData = \hqv\managers\VoterManager::getInstance()->selectAdvance('*', [], [], null, $offset, $limit);
                
                if (empty($allData)) {
                    break;
                }
                $offset += $limit;
                foreach ($allData as $row) {
                    $t = $row->getTerritory();
                    $a = $row->getArea();
                    $area = \hqv\managers\AreaManager::getInstance()->selectAdvance('*', ['area_id', '=', $a, 'and', 'territory_id', '=', $t]);
                    if (!empty($area)) {
                        $area = $area[0];
                        $row->setAreaId($area->getId());
                        \hqv\managers\VoterManager::getInstance()->updateByPK($row);
                    }
                }
            }*/
           /* $offset = 0;
            $limit= 5000;
            while (true) {
                $allData = \hqv\managers\VoterManager::getInstance()->selectAdvance('*', [], [], null, $offset, $limit);
                
                if (empty($allData)) {
                    break;
                }
                $offset += $limit;
                foreach ($allData as $row) {                    
                        $row->setHash(sha1(uniqid()));
                        \hqv\managers\VoterManager::getInstance()->updateByPK($row);
                  
                }
                break;
            }*/
        }

    }

}
