define(["easy-admin"], function (ea) {

    var Controller = {
        index: function () {

            if (top.location !== self.location) {
                top.location = self.location;
            }

            $('.bind-password').on('click', function () {
                if ($(this).hasClass('icon-5')) {
                    $(this).removeClass('icon-5');
                    $("input[name='password']").attr('type', 'password');
                } else {
                    $(this).addClass('icon-5');
                    $("input[name='password']").attr('type', 'text');
                }
            });

            $('.icon-nocheck').on('click', function () {
                if ($(this).hasClass('icon-check')) {
                    $(this).removeClass('icon-check');
                } else {
                    $(this).addClass('icon-check');
                }
            });

            $('.login-tip').on('click', function () {
                $('.icon-nocheck').click();
            });
            //public/static/plugs/easy-admin/easy-admin.js
            //ea.listen(preposeCallback, ok, no, ex)
            ea.listen(function (data) {
                /*Object.keys(data).forEach(function(key){
                    alert(data[key]);
                });*/
                //处理提交前的数据
                data['keep_login'] = $('.icon-nocheck').hasClass('icon-check') ? 1 : 0;
                return data;
            }, function (res) {
                ea.msg.success(res.msg, function () {
                    window.location = ea.url('index');
                })
            }, function (res) {
                ea.msg.error(res.msg, function () {
                    $('#refreshCaptcha').trigger("click");
                });
            });

        },
    };
    return Controller;
});
