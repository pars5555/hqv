NGS.createLoad("admin.loads.snippets.index", {
    getContainer: function () {
        return "indexRightContent";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        $('#slide-out li').removeClass('active');
        $('#sidebar_snippets_li').addClass('active');
        this.initSave();

    },
    initSave: function () {

        $('.f_save').click(function () {
            var rowId = $(this).data('rowid');
            var en = $('#phrase_en_' + rowId).val();
            var am = $('#phrase_am_' + rowId).val();
            var ru = $('#phrase_ru_' + rowId).val();
            NGS.action('admin.actions.snippets.set_snippet_value', {rowId: rowId, phrase_en: en, phrase_am: am, phrase_ru: ru});
            $.post("http://hqv.am/dyn/main/do_set_snippet_value", {rowId: rowId, phrase_en: en, phrase_am: am, phrase_ru: ru}, function (data) {

            });

        });
    }
});
