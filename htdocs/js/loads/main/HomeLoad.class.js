NGS.createLoad("hqv.loads.main.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function () {
        alert(1);
        this.initBirthDate();
        this.initArmKeyboard();

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
                'թ ժ ի լ խ ծ կ հ',
                'ձ ղ ճ մ յ ն շ ո',
                'չ պ ջ ռ ս վ տ ր {shift}',
                'ց ու փ ք օ ֆ'
            ]
        };

        $('#keyboard').keyboard({
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
        $('.datepicker').datetimepicker({
            format: 'Y-m-d',
            inline: true,
            lang: 'hy',
            timepicker: false,
            step: 1
        });
    }
});