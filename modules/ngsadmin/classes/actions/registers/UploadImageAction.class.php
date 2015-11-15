<?php

namespace ngsadmin\actions\registers {

    use ngsadmin\security\RequestGroups;
    use ngs\framework\AbstractAction;
    use ngs\framework\exceptions\NgsErrorException;
    use ngsadmin\managers\RegisterPagesManager;

    class UploadImageAction extends AbstractAction {

        public function service() {
            $type = NGS()->args()->getType();

            $allowed = array('png', 'jpg', 'gif');
            $filename = $_FILES['upload_pic']['name'];

            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (!in_array($ext, $allowed)) {
                echo 'error';
                exit;
            }
            $filename = time() . '.' . $ext;
            $registerManager = RegisterPagesManager::getInstance();
            $addImageToPage = $registerManager->addImageToPage($type, $filename);
            if (!$addImageToPage) {
                echo 'Something Goes Wrong Please Try Later';
                exit;
            }
            $filePath = realpath(NGS()->getPublicDir(DEFAULT_NS)) . "/data/" . $type . '/' . $filename;
            $uploadSuccess = move_uploaded_file($_FILES['upload_pic']['tmp_name'], $filePath);
            if (!$uploadSuccess) {
                echo 'Something Goes Wrong Please Try Later';
                exit;
            }
        }

        public function getRequestGroup() {
            return RequestGroups::$guestRequest;
        }

    }

}
