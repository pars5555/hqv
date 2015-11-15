<?php

/**
 * ImageManager class
 *
 * @author Vahagn Kirakosyan
 * @mail vahagn.kirakosyan@naghashyan.com
 * @year 2015
 */

namespace ngsadmin\managers {

use Exception;

    class ImageManager {

        /**
         * @var app config
         */
        private $config;

        /**
         * @var passed arguemnts
         */
        private $args;

        /**
         * @var singleton instance of class
         */
        private static $instance = null;

        /**
         * Initializes DB mappers
         *
         * @param object $config
         * @param object $args
         * @return
         */
        function __construct() {
            
        }

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new ImageManager();
            }
            return self::$instance;
        }

        /**
         * checks if the file is valid image (jpg, jpeg or png)
         *
         * @param string $path
         * @throws Exception
         * @return boolean isValid
         */
        public function checkValidImage($path) {
            if (file_exists($path)) {
                $imageType = exif_imagetype($path);
                if (in_array($imageType, array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG))) {
                    return true;
                } else {
                    throw new Exception("Unsupported image type.");
                }
            } else {
                throw new Exception("Image does not exist");
            }
        }

        public function isValidBase64Image($base64) {
            $img = @imagecreatefromstring(base64_decode($base64));
            if ($img == false) {
                return false;
            } else {
                imagedestroy($img);
                return true;
            }
        }

        /**
         * adds user logo into file system
         *
         * @param integer $id
         * @param string $path
         * @return boolean success
         */
        public function addUserLogo($id, $path) {
            $this->createJpgImage(UPLOAD_TEMP_DIR . '/' . $path, IMG_ROOT_DIR . '/user/' . $id . '.jpg', $this->config['compress_image_size'], $this->config['compress_image_size']);
            unlink(UPLOAD_TEMP_DIR . '/' . $path);
        }

        /**
         * deletes user logo from file system
         *
         * @param integer $id
         * @return boolean success
         */
        public function deleteUserLogo($id) {
            $path = IMG_ROOT_DIR . '/user/' . $id . '.jpg';
            if (file_exists($path)) {
                return unlink($path);
            }
            return false;
        }

        /**
         * adds pharmacy logo into file system
         *
         * @param integer $id
         * @param string $path
         * @return boolean success
         */
        public function addPharmacyLogo($id, $path) {
            $this->createJpgImage(UPLOAD_TEMP_DIR . '/' . $path, IMG_ROOT_DIR . '/pharmacy/' . $id . '.jpg', $this->config['compress_image_size'], $this->config['compress_image_size']);
            unlink(UPLOAD_TEMP_DIR . '/' . $path);
        }

        /**
         * deletes pharmacy logo from file system
         *
         * @param integer $id
         * @return boolean success
         */
        public function deletePharmacyLogo($id) {
            $path = IMG_ROOT_DIR . '/pharmacy/' . $id . '.jpg';
            if (file_exists($path)) {
                return unlink($path);
            }
            return false;
        }

        /**
         * adds answer logo into file system
         *
         * @param integer $questionId
         * @param integer $answerId
         * @param string $path
         * @return boolean success
         */
        public function addAnswerLogo($questionId, $answerId, $path) {
            $dir = IMG_ROOT_DIR . '/quiz_answer/' . $questionId;
            if (!is_dir($dir)) {
                mkdir($dir);
            }
            $this->createJpgImage(UPLOAD_TEMP_DIR . '/' . $path, $dir . "/" . $answerId . '.jpg', 100, 100);
            unlink(UPLOAD_TEMP_DIR . '/' . $path);
        }

        /**
         * adds challenge answer image into file system
         *
         * @param integer $userChallengeId
         * @param string $path
         * @return boolean success
         */
        public function addChallengeAnswerImage($userChallengeId, $path) {
            return rename(UPLOAD_TEMP_DIR . '/' . $path, IMG_ROOT_DIR . '/challenge_answer/' . $userChallengeId . '.jpg');
            // $this->createJpgImage(UPLOAD_TEMP_DIR.'/'.$path, IMG_ROOT_DIR.'/challenge_answer/'.$userChallengeId.'.jpg', 100, 100);
            // unlink(UPLOAD_TEMP_DIR.'/'.$path);
        }

        /**
         * adds message image into file system
         *
         * @param integer $messageId
         * @param string $path
         * @return boolean success
         */
        public function addMessageImage($messageId, $base64) {
            $fileWritten = file_put_contents(IMG_ROOT_DIR . '/message/' . $messageId . '.jpg', base64_decode($base64));
            if ($fileWritten === false) {
                return false;
            }
            return true;
        }

        public function createJpgImage($sourceSrc, $imgSrc, $thumbnailWidth = false, $thumbnailHeight = false) {
            //getting the image dimensions
            list($width_orig, $height_orig) = getimagesize($sourceSrc);
            $imgType = exif_imagetype($sourceSrc);
            if ($imgType == IMAGETYPE_GIF) {
                $myImage = imagecreatefromgif($sourceSrc);
            }
            if ($imgType == IMAGETYPE_JPEG) {
                $myImage = imagecreatefromjpeg($sourceSrc);
            }
            if ($imgType == IMAGETYPE_PNG) {
                $myImage = imagecreatefrompng($sourceSrc);
            }
            $ratio_orig = $width_orig / $height_orig;
            if ($thumbnailWidth === false || $width_orig <= $thumbnailWidth) {
                $thumbnailWidth = $width_orig;
                $thumbnailHeight = $height_orig;
            }
            if ($thumbnailWidth / $thumbnailHeight > $ratio_orig) {
                $new_height = $thumbnailWidth / $ratio_orig;
                $new_width = $thumbnailWidth;
            } else {
                $new_width = $thumbnailHeight * $ratio_orig;
                $new_height = $thumbnailHeight;
            }
            $x_mid = $new_width / 2;
            //horizontal middle
            $y_mid = $new_height / 2;
            //vertical middle

            $process = imagecreatetruecolor(round($new_width), round($new_height));
            imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
            imagedestroy($myImage);

            imagejpeg($process, $imgSrc, 100);
            imagedestroy($process);
            return true;
        }

    }

}

