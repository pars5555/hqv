NGS.createLoad("hqv.loads.main.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        this.initBirthDate();
        this.initArmKeyboard();
        this.initSearch();

    },
    initSearch: function () {
        $('#searchVoters').click(function () {
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var birthDate = $('#birthDate').val();
            if (birthDate.length > 0)
            {
                NGS.load("hqv.loads.main.search_result", {birthDate: birthDate, firstName:firstName,lastName:lastName});
            }
        });
    },
    initArmKeyboard: function () {
        $.keyboard.layouts.arm = {
            'normal': [
                'ա բ գ դ ե զ է ը {bksp}',
                'թ ժ ի լ խ ծ կ հ',
                'ձ ղ ճ մ յ ն շ ո',
                'չ պ ջ ռ ս վ տ ր {shift}',
                'ց ու փ ք օ ֆ'
            ],
            'shift': [
                'Ա Բ Գ Դ Ե Զ Է Ը {bksp}',
                'Թ Ժ Ի Լ Խ Ծ Կ Հ',
                'Ձ Ղ Ճ Մ Յ Ն Շ Ո',
                'Չ Պ Ջ Ռ Ս Վ Տ Ր {shift}',
                'Ց Ու Փ Ք Օ Ֆ'
            ]
        };

        $('.keyboard').keyboard({
            stayOpen: false,
            alwaysOpen: false,
            autoAccept: true,
            //appendTo: '#ds-keyboard-container',
            usePreview: false,
            initialFocus: true,
            layout: 'arm',
            display: {
                'shift': '⇧',
                'bksp': '⌫'
            }
        });
    },
    initBirthDate: function () {
        $('#birthDate').datetimepicker({
            format: 'Y-m-d',
            inline: false,
            lang: 'hy',
            timepicker: false,
            step: 1,
            formatDate: 'Y-m-d',
            yearStart: 1920,
            yearEnd: 2000,
            defaultDate: '1990-01-01'
        });
    }
});