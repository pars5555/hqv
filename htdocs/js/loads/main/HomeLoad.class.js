NGS.createLoad("hqv.loads.main.home", {
    getContainer: function () {
        return "initialLoad";
    },
    onError: function (params) {

    },
    afterLoad: function (params) {
        this.initBirthDate(params.minBirthDate, params.maxBirthDate);
        this.initArmKeyboard();
        this.initSearch();
        this.initParallax();
        this.initScrollSpy();
        this.initSideNav();
        this.initLanDropDown();
    },
    convertEnCharsToArmChars: function (text) {
        text = text.toLowerCase();
        var find = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "7", "8", "[", "]", "=", "/", "0", "9"];
        var replace = ["ա", "բ", "ց", "դ", "ե", "ֆ", "գ", "հ", "ի", "յ", "կ", "լ", "մ", "ն", "օ", "փ", "ք", "ռ", "ս", "տ", "ւ", "վ", "ո", "ղ", "ը", "զ", "է", "թ", "փ", "ձ", "ջ", "և", "ր", "խ", "ծ", "ժ", "շ", "ճ", "չ"];
        for (var i = 0; i < find.length; i++)
        {
            text = text.replace(find[i], replace[i]);
        }
        return text.ucfirst();
    },
    initSearch: function () {
        var thisInstance = this;
        $('#firstName, #lastName').on('input', function () {
            var text = $(this).val();
            text = thisInstance.convertEnCharsToArmChars(text);
            $(this).val(text);
        });

        $('#searchVoters').click(function (e) {
            e.preventDefault();
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var birthDate = $('input[name="birthDate"]').val();
            if (birthDate.length > 0) {
                jQuery("#searchResultModal").openModal();
                jQuery("#searchResult").html('');
                jQuery("#searchLoader").show();
                NGS.load("hqv.loads.main.search_result", {birthDate: birthDate, firstName: firstName, lastName: lastName});
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
    initParallax: function () {
        jQuery('.parallax').parallax();
    },
    initScrollSpy: function () {
        jQuery('.scrollspy').scrollSpy();
    },
    initSideNav: function () {
        jQuery(".button-collapse").sideNav();
    },
    initLanDropDown: function () {
        jQuery(".f_lan_drop_down").dropdown();
        jQuery(".f_cur_lan").click(function () {
            jQuery('#lanBtn').text(jQuery(this).text());
        });

    },
    initBirthDate: function (minBirthDate, maxBirthDate) {
        var minBirthDateParts = minBirthDate.split("-");
        var maxBirthDateParts = maxBirthDate.split("-");
        console.log(minBirthDateParts);
        console.log(maxBirthDateParts);
        $('#birthDate').pickadate({
            format: 'd mmmm, yyyy',
            formatSubmit: 'yyyy-mm-dd',
            hiddenPrefix: 'birthDate',
            hiddenSuffix: '',
            monthsFull: ['Հունվար', 'Փետրվար', 'Մարտ', 'Ապրիլ', 'Մայիս', 'Հունիս', 'Հուլիս', 'Օգոստոս', 'Սեպտեմբեր', 'Հոկտեմբեր', 'Նոյեմբեր', 'Դեկտեմբեր'],
            monthsShort: ['Հուն', 'Փետ', 'Մար', 'Ապր', 'Մայ', 'Հուն', 'Հուլ', 'Օգոս', 'Սեպ', 'Հոկ', 'Նոյ', 'Դեկ'],
            weekdaysFull: ['Կիրակի ', 'Երկուշաբթի', 'Երեքշաբթի', 'Չորեքշաբթի', 'Հինգշաբթի', 'Ուրբաթ', 'Շաբաթ'],
            weekdaysShort: ['կիր', 'երկ', 'երեք', 'չոր', 'հինգ', 'ուրբ', 'շաբ'],
            selectMonths: true,
            selectYears: 150,
            clear: null,
            today: null,
            close: 'փակել',
            min: [parseInt(minBirthDateParts[0]), parseInt(minBirthDateParts[1])-1, parseInt(minBirthDateParts[2])],
            max: [parseInt(maxBirthDateParts[0]), parseInt(maxBirthDateParts[1])-1, parseInt(maxBirthDateParts[2])]
        });
    }
});
