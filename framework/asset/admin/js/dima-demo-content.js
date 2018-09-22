jQuery(function ($) {

    $("#dima-demo-submit").find(".standard").live('click', function (e) {
        var _timeOutA = 10,
            _timeOutB = 20,
            _timeOutC = 25,
            selected_demo = jQuery(this).data('demo-name'),
            selected_home_title = jQuery(this).data('demo-home-title'),
            selected_is_shop_demo = jQuery(this).data('demo-is-shop'),
            selected_revslider_exists = jQuery(this).data('demo-revslider-exists'),
            loading, Importer;

        loading = function () {
            this.$el = $(this.context);
            this.$message = this.$el.find(".dima-progress-title");
        };

        Importer = function () {
        };

        //noinspection JSUnresolvedVariable
        DimaAdminConfirm("Import", '', function (_content) {
            Importer.init(_content);
        }, $(this));

        $.extend(Importer.prototype, {
            init: function (_content) {
                this.data = {
                    action: 'dima_import_demo',
                    demo_type: selected_demo,
                    demo_home_title: selected_home_title,
                    is_shop_demo: selected_is_shop_demo,
                    demo_revslider_exists: selected_revslider_exists,
                    contentTypes: _content,
                    attempts: 1
                };
                this.StartImport();
            },

            StartImport: function () {

                loading.start();

                //noinspection JSUnresolvedVariable
                loading.message(DimaDemoAlert.msg_working);

                this.ImportProcess(function (response) {
                    //alert("DONE");
                    if (response.success === false) {
                        return this.failure(response.data.message, response);
                    }
                    loading.complete();
                    $('#dima-demo-submit').prop('disabled', false);

                }.bind(this));

            },

            ImportProcess: function (response) {
                jQuery.post(ajaxurl, this.data, response).fail(function () {
                    loading.message(this.timeOutAlert(this.data.attempts + 1));
                    if (this.data.attempts >= _timeOutC) {
                        //noinspection JSUnresolvedVariable
                        return this.failure(DimaDemoAlert.msg_fail);
                    }

                    this.ImportProcess(response);
                }.bind(this));
            },

            complete: function () {
                loading.complete();
                $("#dima-demo-submit").prop("disabled", !1)
            },

            failure: function (message) {
                loading.fail(message);
                $("#dima-demo-submit").prop("disabled", !1);
            },

            timeOutAlert: function (attempts) {
                //console.log("Time");
                if (attempts > _timeOutB)
                //noinspection JSUnresolvedVariable
                    return DimaDemoAlert.msg_timeoutC;
                if (attempts > _timeOutA)
                //noinspection JSUnresolvedVariable
                    return DimaDemoAlert.msg_timeoutB;
                //noinspection JSUnresolvedVariable
                return DimaDemoAlert.msg_timeoutA;
            }
        });


        //Loading
        $.extend(loading.prototype, {
            context: '<div class="dima-main-progress">'
            + '<div class="dima-progress-warp">'
            + '<div class="dima-progress-content">'
            + '<div class="dima-progress-title"></div>'
            + '<div class="dima-progress-bar-outer">'
            + '<div class="dima-progress-bar-inner"></div>'
            + '</div>'
            + '</div>'
            + '</div>'
            + '</div>',
            start: function () {
                //noinspection JSUnresolvedVariable
                this.message(DimaDemoAlert.msg_start);
                $('.pixeldima-demo-wrap').prepend(this.$el);
            },
            message: function (message) {
                this.$message.html(message)
            },

            complete: function () {
                //noinspection JSUnresolvedVariable
                this.message(DimaDemoAlert.msg_complete);
                setTimeout(function () {
                    this.$el.addClass("done");
                    this.close();
                }.bind(this), 400)
            },
            fail: function (message) {
                this.message(message);
                this.close();
            },
            close: function () {
                this.$el.delay(1500).fadeOut(250);
                setTimeout(function () {
                    this.$el.detach().removeClass("done").show();
                    this.message("")
                }.bind(this), 2e3)
            }
        });
        loading = new loading;
        Importer = new Importer;

        e.preventDefault();
    });


});