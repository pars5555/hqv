<?php

namespace ngsadmin\actions\users {

    use bclub\managers\UserManager;
    use bclub\managers\UserSkinTypeManager;
    use bclub\managers\UserSkinProblemManager;
    use bclub\managers\SkinProblemManager;
    use bclub\managers\SkinTypeManager;
    use ngsadmin\security\RequestGroups;
    use ngs\framework\AbstractAction;
    use ngs\framework\exceptions\NgsErrorException;
    use bclub\managers\CountryManager;

    class UploadUserAction extends AbstractAction {

        public function service() {

            $userManager = UserManager::getInstance();
            $allowed = array('csv');
            $filename = $_FILES['upload_user']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
                echo 'error';
                exit;
            }
            $filePath = realpath(NGS()->getDataDir()) . "/" . time() . ".csv";
            $uploadSuccess = move_uploaded_file($_FILES['upload_user']['tmp_name'], $filePath);
            $csv = array_map('str_getcsv', file($filePath));
            $countryDtos = CountryManager::getInstance()->getAllCountries();
            $countryArr = array();
            foreach ($countryDtos as $key => $value) {
                $countryArr[strtolower($value->getName())] = $value->getId();
            }
            array_shift($csv);
            $exsistedUserArr = array();
            $skinTypeDtos = \ngsadmin\managers\SkinTypeManager::getInstance()->getSkinTypes();
            $skinProblemDtos = \ngsadmin\managers\SkinProblemManager::getInstance()->getSkinProblems();
            foreach ($csv as $ckey => $cvalue) {
                $userArr = $this->getUser($cvalue);
                $userArr["country_id"] = $countryArr[strtolower($userArr["country_id"])];

                $skinTypeNamesArray = array_map('trim', array_map('strtolower', explode(",", $userArr["skin_type"])));

                $skinTypeIdsArr = [];
                foreach ($skinTypeDtos as $key => $value) {
                    if (in_array(strtolower($value->getName()), $skinTypeNamesArray)) {
                        $skinTypeIdsArr[] = $value->getId();
                    }
                }
                $userArr["skin_type"] = $skinTypeIdsArr;


                $skinProblemNamesArray = array_map('trim', array_map('strtolower', explode(",", $userArr["skin_problem"])));

                $skinProblemIdsArr = [];
                foreach ($skinProblemDtos as $key => $value) {
                    if (in_array(strtolower($value->getName()), $skinProblemNamesArray)) {
                        $skinProblemIdsArr[] = $value->getId();
                    }
                }
                $userArr["skin_problem"] = $skinProblemIdsArr;
                if ($userDto = $userManager->selectByMobile($userArr["mobile"])) {
                    $exsistedUserArr[] = $userDto;
                } else {
                    $itemDto = \ngsadmin\managers\UserManager::getInstance()->createDtoFromArgs($userArr);
                    $itemDto->setStatus("uploaded");
                    $userId = \ngsadmin\managers\UserManager::getInstance()->addUser($itemDto);
                    UserSkinTypeManager::getInstance()->updateUserSkinTypes($userId, $userArr["skin_type"]);
                    UserSkinProblemManager::getInstance()->updateUserProblems($userId, $userArr["skin_problem"]);
                }
            }
            unlink($filePath);
            if (count($exsistedUserArr) > 0) {
                NGS()->getSessionManager()->setSessionParam('users', $exsistedUserArr);
                $this->addParam("existed", 1);
                return;
            }
            $this->addParam("existed", 0);
        }

        public function getUser($cvalue) {
            //var_dump($cvalue);exit;
            $tmpArr = array();
            $mapArray = array("pharmacy_id", "profession_id", "username", "password", "email", "title", "first_name", "last_name", "gender", "mobile", "birthdate", "nationality", "country_id", "city", "zip", "address1", "address2", "skin_type", "skin_problem", "find_bioderma", "securtiy_question_id", "security_question_answer");
            foreach ($cvalue as $key => $value) {
                $tmpArr[$mapArray[$key]] = trim($value);
            }
            return $tmpArr;
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
