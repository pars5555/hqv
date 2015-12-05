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
    use hqv\managers\AdditionalVoterManager;
    use hqv\managers\VoterManager;

    class ConvertAction extends BaseAction {
 /*private  function mb_ucfirst($str, $encoding = "UTF-8", $lower_str_end = false) {
            $first_letter = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding);
            $str_end = "";
            if ($lower_str_end) {
                $str_end = mb_strtolower(mb_substr($str, 1, mb_strlen($str, $encoding), $encoding), $encoding);
            } else {
                $str_end =  mb_substr($str, 1, mb_strlen($str, $encoding), $encoding);
            }
            $str = $first_letter . $str_end;
            return $str;
        }*/
        public function service() {
            set_time_limit(500000);
            
            
            var_dump($voterIdFromOldVoterId);exit;

            $offset = 0;
            $limit = 5000;
            while (true) {
                $allData = VoterDataManager::getInstance()->selectAdvance('*', ['old_voter_id', '=', 0], [], null, $offset, $limit);
                if (empty($allData)) {
                    break;
                }
                $offset += $limit;
                foreach ($allData as $row) {
                    $voterId = $row->getVoterId();
                     $newVoterId = \hqv\managers\VoterDataManager::getInstance()->getVoterIdFromOldVoterId($voterId);
                     
                    $row->setVoterId($newVoterId);
                    $row->setOldVoterId($voterId);
                     
                    
                    VoterDataManager::getInstance()->updateByPK($row);
                    exit;
                }
            }
            exit;


            /*
              $offset = 0;
              $limit = 5000;
              while (true) {
              $allData = AdditionalVoterManager::getInstance()->selectAdvance('*', [], [], null, $offset, $limit);
              if (empty($allData)) {
              break;
              }
              $offset += $limit;
              foreach ($allData as $row) {
              $bd = $row->getBd();
              $bdArray = explode('/', $bd);
              $birthDate = $bdArray [2].'-'.$bdArray [1].'-'.$bdArray [0];
              $row->setBirthDate($birthDate);
              AdditionalVoterManager::getInstance()->updateByPK($row);
              }
              }
              exit; */

            /* $allAreas = AreaManager::getInstance()->selectAll();

              foreach ($allAreas as $area) {
              $areaId = $area->getId();
              $areaCode = $area->getTerritoryId() . '_' . $area->getAreaId();
              for ($i = 0; $i <= 3; $i++) {
              $createDto = ObserverManager::getInstance()->createDto();
              $createDto->setUsername('obs_' . $areaCode);
              $pass = $this->generateRandomString(8);
              $passMd5 = md5($pass);
              $createDto->setPassword($passMd5);
              $createDto->setPass($pass);
              $createDto->setAreaId($areaId);
              ObserverManager::getInstance()->insertDto($createDto);
              }
              }
              echo 'End';
              exit; */



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
            /* $offset = 0;
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
              } */
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
              } */
        }

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

    }

}
    