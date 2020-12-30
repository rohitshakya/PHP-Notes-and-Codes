$("#registercustomer").submit(function(e){
    e.preventDefault();
    $("#regErrorArea").removeClass('alert-success');
    $("#regErrorArea").removeClass('alert-danger');
    $("#regErrorArea").removeClass('alert-warning');
    $.ajax({
        type : 'POST',
        url : 'makecustomer',
        data : $(this).serialize(),
        beforeSend:function(){
            $("#regErrorArea").css('display', 'block');
            $("#regErrorArea").addClass('alert-warning');
            $("#regErrorArea").html("Please Wait...");
        },
        success : function(response){
            if(response=='Success'){
                $("#regErrorArea").removeClass('alert-warning');
                $("#regErrorArea").addClass('alert-success');
                $("#regErrorArea").html('Account created.');
                $("#regErrorArea").css('display', 'block').delay(7000).fadeOut(1000);
                $("#registercustomer")[0].reset();
            }
            else{
                $("#regErrorArea").removeClass('alert-warning');
                $("#regErrorArea").addClass('alert-danger');
                $("#regErrorArea").html(response);
                $("#regErrorArea").css('display', 'block').delay(7000).fadeOut(1000);
            }
        }
    });
});

$("#logincustomer").submit(function(e){
    e.preventDefault();
    $("#logErrorArea").removeClass('alert-success');
    $("#logErrorArea").removeClass('alert-danger');
    $("#logErrorArea").removeClass('alert-warning');
    $.ajax({
        type : 'POST',
        url : 'accesscustomer',
        data : $(this).serialize(),
        beforeSend:function(){
            $("#logErrorArea").css('display', 'block');
            $("#logErrorArea").addClass('alert-warning');
            $("#logErrorArea").html("Please Wait...");
        },
        success : function(response){
            if(response=='Success'){
                location.reload();
            }
            else{
                $("#logErrorArea").removeClass('alert-warning');
                $("#logErrorArea").addClass('alert-danger');
                $("#logErrorArea").html(response);
                $("#logErrorArea").css('display', 'block').delay(7000).fadeOut(1000);
            }
        }
    });
});