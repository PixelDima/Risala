jQuery(document).ready(function ($) {
    // Confirm form.
    window.DimaAdminConfirmCallOut = function (form, type, message) {

        form.on('submit', function (e) {

            e.preventDefault();

            DimaAdminResetConfirm(type, message, function () {
                form[0].submit();
            });

        });

    };

    $('#pixeldima-backup-import').change(function () {
        $('#pixeldima-backup-import-submit').removeAttr('disabled');
    });

    DimaAdminConfirmCallOut($('.pixeldima-customizer-backup .reset form'), 'error', 'Are you sure you want to reset your Customizer settings? is not reversible unless you have previously made a backup of your settings.');

});