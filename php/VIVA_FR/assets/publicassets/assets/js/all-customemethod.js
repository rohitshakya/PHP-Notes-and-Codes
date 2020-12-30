$(document).ready(function() {

    //registration
    $("#publicregiserform").submit(function(e) {
        e.preventDefault();
        $('#regError').removeClass('alert-danger');
        $('#regError').removeClass('alert-success');
        $('#regError').removeClass('alert-warning');
        $.ajax({
            type: 'POST',
            url: base_url + 'registeraccount',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#regError').addClass('alert-warning');
                $('#regError').html("please wait..");
                $('#regError').css('display', 'block');
            },
            success: function(response) {
               // alert(response);
                if (response == 'Veryfied') {
                    $('#publicregiserform')[0].reset();
                    $('#regError').removeClass('alert-warning');
                    $('#regError').addClass('alert-success');
                    $('#regError').html("Account created Please check your mail.");
                    $('#regError').css('display', 'block');
                    //.delay(5000).fadeOut(5000)

                } else {
                    $('#regError').removeClass('alert-warning');
                    $('#regError').addClass('alert-danger');
                    $('#regError').html(response);
                    $('#regError').css('display', 'block').delay(7000).fadeOut(500);
                }
            }
        });
    });

    //login
    $("#publicloginform").submit(function(e) {
        e.preventDefault();
        $('#logError').removeClass('alert-danger');
        $('#logError').removeClass('alert-success');
        $('#logError').removeClass('alert-warning');
        $.ajax({
            type: 'POST',
            url: base_url + 'loginaccount',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#logError').addClass('alert-warning');
                $('#logError').html("please wait..");
                $('#logError').css('display', 'block');
            },
            success: function(response) {
                if (response == 'Veryfied') {
                    $('#publicloginform')[0].reset();
                    //window.location.href = base_url + 'account';
                    window.location.href = base_url + 'loginredirect';
                    
                    // location.reload();
                    //.delay(5000).fadeOut(5000)

                } else {
                    $('#logError').removeClass('alert-warning');
                    $('#logError').addClass('alert-danger');
                    $('#logError').html(response);
                    $('#logError').css('display', 'block').delay(7000).fadeOut(500);
                }
            }
        });
    });

    $(".gotobutton").click(function() {
        $(".activitytypelist").css('display', 'none');
        $(".gotobutton span").html('Go!');
        var current = $(this);
        $.ajax({
            type: 'POST',
            url: base_url + 'getactivitytype',
            data: { 'topicid': current.attr('data'), 'class': current.attr('data-class'), 'subid': current.attr('data-subid'), 'catid': current.attr('data-catid'), 'subject': current.attr('data-subject'), 'category': current.attr('data-category') },
            beforeSend: function() {
                current.find("span").html("<i class='fa fa-spinner fa-pulse fa-lg' style='color:#F3CF14'></i>");
            },
            success: function(response) {
                if (response != "") {
                    $(".activitytypelist").css('display', 'none');
                    $("." + current.attr('id')).css('display', 'inline-block');
                    $("." + current.attr('id')).html(response);
                }
                $(".gotobutton span").html('Go!');
            }
        });
    });


    $("#updateprofile").submit(function(e) {
        e.preventDefault();
        $('#profileError').removeClass('alert-danger');
        $('#profileError').removeClass('alert-success');
        $('#profileError').removeClass('alert-warning');
        $.ajax({
            type: 'POST',
            url: base_url + 'api/updateprofile',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#profileError').addClass('alert-warning');
                $('#profileError').html("please wait..");
                $('#profileError').css('display', 'block');
            },
            success: function(response) {
                var getRes = JSON.parse(response);
                if (getRes.status == 1) {
                    $('#profileError').removeClass('alert-warning');
                    $('#profileError').removeClass('alert-danger');
                    $('#profileError').addClass('alert-success');
                    $('#profileError').html(getRes.msg);
                    $('#profileError').css('display', 'block').delay(7000).fadeOut(500);
                    $('#updateprofile')[0].reset();
                    location.reload();
                    //.delay(5000).fadeOut(5000)

                } else {
                    $('#profileError').removeClass('alert-warning');
                    $('#profileError').addClass('alert-danger');
                    $('#profileError').html(getRes.msg);
                    $('#profileError').css('display', 'block').delay(7000).fadeOut(500);
                }
            }
        });
    });

})