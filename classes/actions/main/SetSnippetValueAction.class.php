<?php

namespace hqv\actions\main {

    use hqv\actions\BaseAction;
    use hqv\managers\TranslationManager;
    use NGS;

    class SetSnippetValueAction extends BaseAction {

        public function service() {
            if (!isset(NGS()->args()->rowId)) {
                $this->addParam('status', 'error');
                $this->addParam('message', "Missing ID");
                return;
            }
            $rowId = intval(NGS()->args()->rowId);
            $phrase_en = NGS()->args()->phrase_en;
            $phrase_am = NGS()->args()->phrase_am;
            $phrase_ru = NGS()->args()->phrase_ru;
            TranslationManager::getInstance()->updateRow($rowId, $phrase_en, $phrase_am, $phrase_ru);
        }

    }

}
