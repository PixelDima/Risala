(function ($) {

    window.DimaAdminConfirm = function (type, message, callback, $this) {

        var $content = $("#dima-install-demo-notes"),
            title = $this.closest('.pixeldima-demo').find('.pixeldima-demo-title .title').html(),
            demoType = $this.closest('.pixeldima-demo').find('#install').data('demo-name'),
            desc = $this.closest('.pixeldima-demo').find('.demo-desc').html(),
            rev_link = $this.closest('.pixeldima-demo').find('.demo-preview').attr('href'),
            img = $this.closest('.pixeldima-demo').find('.pixeldima-demo-screenshot img').attr('src'),
            import_exception_list = $this.closest('.pixeldima-demo').find('.demo-desc').data('import'),
            importContentArray,
            allImport = false;


        var self = $content.addClass('demo-modal-' + demoType);
        var import_exception_count = 0;
        $content.find('.demo-info h3').html(title);
        $content.find('.demo-desc').html(desc);
        $content.find('.demo-screenshots > img').attr('src', img);
        $content.find('.demo-preview').attr('href', rev_link);
        $content.addClass('is-visible');
        importContentArray = [];

        if (typeof import_exception_list !== 'undefined') {
            import_exception_list = import_exception_list.split(",");
            for (str of import_exception_list) {
                $("#import-dima input[value='" + str + "']").parent().hide();
                import_exception_count++;
            }
        } else {
            $("#import-dima input").parent().show();
        }

        $("#import-dima input").removeAttr('checked');

        $('.pixeldima-admin-buttons a').on('click', function (e) {
            $('.pixeldima-admin-popup').removeClass('is-visible');
            if ($(this).hasClass('yes')) {
                callback(importContentArray);
            }
        });

        var countChecked = function () {
            $("#import-dima input:checkbox:checked").each(function () {
                if (!this.disabled) {
                    importContentArray.push(this.value);
                }
                if ('all' === this.value) {
                    $('#import-dima input:checkbox').not(this).prop('checked', this.checked);
                    allImport = true;
                }
            });
        };


        self.find('.button.install').css('display', 'none');

        $('#import-dima input:checkbox').on('change', function (e) {
            countChecked();
            var form = $(this).closest('form');

            if ('all' === $(this).val()) {

                // 'all' checkbox is checked.
                form.find('input:checkbox:not(:disabled)').prop('checked', jQuery(this).prop('checked'));

                if ($(this).is(':checked')) {
                    self.find('.button.install').css('display', 'inline-block');
                } else {
                    self.find('.button.install').css('display', 'none');
                }

            } else if (form.find('input[type="checkbox"]:checked').not(':disabled').length > 0) {
                // Checkbox is checked, but there could be disabled (previously imported) checkboxes as well.
                self.find('.button.install').css('display', 'inline-block');

                // We want to check 'all' if all checkboxes are selected and there are not "disabled" among them.
                if (!form.find('input[type="checkbox"]:checked').is(':disabled')) {
                    // -1 is excluding 'all' checkbox.
                    if (( form.find('input[type="checkbox"]').length - 1 - import_exception_count ) === form.find('input[type="checkbox"]:checked').length) {
                        $('.demo-modal-' + demoType + ' input[type="checkbox"][value="all"]').prop('checked', true);
                    }
                }

                $('.demo-modal-' + demoType + ' .button-done-demo').css('display', 'none');
            } else {

                // Checkbox is unchecked.

                self.find('.button.install').css('display', 'none');
            }

            // Uncheck 'all' if checkbox was unchecked.
            if (false === $(this).prop('checked')) {
                $('.demo-modal-' + demoType + ' input[type="checkbox"][value="all"]').prop('checked', false);
            }

        });


        //close popup
        $('.pixeldima-admin-popup').on('click', function (event) {
            if ($(event.target).is('.pixeldima-admin-popup-close') || $(event.target).is('.pixeldima-admin-popup')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
                $content.removeClass('demo-modal-' + demoType);
            }
        });

        //close popup when clicking the esc keyboard button
        $(document).keyup(function (event) {
            if (event.which == '27') {
                $('.pixeldima-admin-popup').removeClass('is-visible');
                $content.removeClass('demo-modal-' + demoType);
            }
        });
    };

    window.DimaAdminResetConfirm = function (type, message, callback) {

        $('body').append('<div class="pixeldima-admin-popup is-visible dima-confirm" role="alert">' +
            '<div class="pixeldima-admin-popup-inner">' +
            '<div class="pixeldima-admin-popup-container">' +
            '<p>' + message + '</p>' +
            '<ul class="pixeldima-admin-buttons">' +
            '<li class="yes"><a class="yes ' + type + '" href="#0">Yes</a></li>' +
            '<li class="no"><a class="no" href="#0">No</a></li>' +
            '</ul>' +
            '<a href="#0" class="pixeldima-admin-popup-close img-replace"></a>' +
            '</div>' +
            '</div>' +
            '</div>');

        $('.pixeldima-admin-buttons a').on('click', function (e) {

            $('.pixeldima-admin-popup').remove();

            if ($(this).hasClass('yes')) {
                callback();
            }

        });

        //close popup
        $('.pixeldima-admin-popup').on('click', function (event) {
            if ($(event.target).is('.pixeldima-admin-popup-close') || $(event.target).is('.pixeldima-admin-popup')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });

        //close popup when clicking the esc keyboard button
        $(document).keyup(function (event) {
            if (event.which == '27') {
                $('.pixeldima-admin-popup').removeClass('is-visible');
            }
        });


    };

})(jQuery);