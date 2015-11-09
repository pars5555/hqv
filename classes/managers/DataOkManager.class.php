<?php

/**
 * @author Levon Naghashyan <levon@naghashyan.com>
 * @site http://naghashyan.com
 * @mail levon@naghashyan.com
 * @year 2010-2015
 * @package managers
 * @version 6.0
 *
 */

namespace hqv\managers {

    use DateTime;
    use hqv\dal\mappers\DataOkMapper;

    class DataOkManager extends AdvancedAbstractManager {

        /**
         * @var $instance
         */
        public static $instance;

        /**
         * Returns an singleton instance of this class
         *
         * @param object $config
         * @param object $args
         * @return
         */
        public static function getInstance() {
            if (self::$instance == null) {
                self::$instance = new DataOkManager(DataOkMapper::getInstance());
            }
            return self::$instance;
        }

        public function addRow($f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8) {
            $date = DateTime::createFromFormat('d/m/Y', $f5);
            if (!$date) {
                return false;
            }

            $dto = $this->createDto();
            $dto->setNumber($f1);

            $dto->setLastName($this->convertStringToUnicode($f2));
            $dto->setFirstName($this->convertStringToUnicode($f3));
            $dto->setFatherName($this->convertStringToUnicode($f4));
            $dto->setBirthDate($date->format('Y-m-d'));
            $dto->setAddress($this->convertStringToUnicode($f6));
            $dto->setTerritory($f7);
            $area = explode('/', $f8);
            $dto->setArea($area[1]);
            return $this->insertDto($dto);
        }

        private function convertStringToUnicode($text) {
            $arr = [
                "²" => "Ա",
                "³" => "ա",
                "´" => "Բ",
                "µ" => "բ",
                "¶" => "Գ",
                "·" => "գ",
                "¸" => "Դ",
                "¹" => "դ",
                "º" => "Ե",
                "»" => "ե",
                "¼" => "Զ",
                "½" => "զ",
                "¾" => "Է",
                "¿" => "է",
                "À" => "Ը",
                "Á" => "ը",
                "Â" => "Թ",
                "Ã" => "թ",
                "Ä" => "Ժ",
                "Å" => "ժ",
                "Æ" => "Ի",
                "Ç" => "ի",
                "È" => "Լ",
                "É" => "լ",
                "Ê" => "Խ",
                "Ë" => "խ",
                "Ì" => "Ծ",
                "Í" => "ծ",
                "Î" => "Կ",
                "Ï" => "կ",
                "Ð" => "Հ",
                "Ñ" => "հ",
                "Ò" => "Ձ",
                "Ó" => "ձ",
                "Ô" => "Ղ",
                "Õ" => "ղ",
                "Ö" => "Ճ",
                "×" => "ճ",
                "Ø" => "Մ",
                "Ù" => "մ",
                "Ú" => "Յ",
                "Û" => "յ",
                "Ü" => "Ն",
                "Ý" => "ն",
                "Þ" => "Շ",
                "ß" => "շ",
                "à" => "Ո",
                "á" => "ո",
                "â" => "Չ",
                "ã" => "չ",
                "ä" => "Պ",
                "å" => "պ",
                "æ" => "Ջ",
                "ç" => "ջ",
                "è" => "Ռ",
                "é" => "ռ",
                "ê" => "Ս",
                "ë" => "ս",
                "ì" => "Վ",
                "í" => "վ",
                "î" => "Տ",
                "ï" => "տ",
                "ð" => "Ր",
                "ñ" => "ր",
                "ò" => "Ց",
                "ó" => "ց",
                "õ" => "ւ",
                "ö" => "Փ",
                "÷" => "փ",
                "ø" => "Ք",
                "ù" => "ք",
                "ú" => "Օ",
                "û" => "օ",
                "ü" => "Ֆ",
                "ý" => "ֆ",
                "." => "․",
                "," => ",",
                ")" => ")"];
            return strtr($text, $arr);
        }

    }

}
