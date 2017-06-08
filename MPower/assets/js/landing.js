new WOW().init();
$(document).ready(function() {
    $('#btn-login').click(function(e) {
        e.preventDefault();
        if ($('.nav-link-user').hasClass('active')) {
            $.ajax({
                type: 'POST',
                data: { username: $("input[name='username']").val(), pwd: $("input[name='pwd']").val() },
                url: "http://localhost/MPower/user/login",
                success: function(data) {
                    console.log(data)
                    if (data == 1) {
                        window.location.href = "http://localhost/MPower/user";
                    }
                }
            })
        }
        if($('.nav-link-org').hasClass('active')) {
        	$.ajax({
                type: 'POST',
                data: { username: $("input[name='username']").val(), pwd: $("input[name='pwd']").val() },
                url: "http://localhost/MPower/organizer/login",
                success: function(data) {
                    console.log(data)
                    if (data == 1) {
                        window.location.href = "http://localhost/MPower/organizer";
                    }
                }
            })
        }
    });
});
