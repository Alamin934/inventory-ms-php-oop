$(document).ready(function () {
    const domain = "http://localhost/php_project/inv_project";
    // user ragistration
    $(document).submit("#register_form", function(){
        $.ajax({
            type: "POST",
            url: `${domain}/includes/templates/save_user.php?get=registration`,
            data: $("#register_form").serialize(),
            success: function (response) {
                if(response == 1){
                    $(".register_msg").removeClass('alert-danger').addClass('alert-success').fadeIn().html("User Registration Successfully");
                    $(".overlay").show();
                    setTimeout(() => {
                        $(".register_msg").fadeOut()
                        window.location.replace(domain);
                    }, 4000);
                    $("#register_form").trigger("reset");
                }else if(response == 0){
                    $(".register_msg").fadeIn().html("User Registration Failed");
                    setTimeout(() => {
                        $(".register_msg").fadeOut()
                    }, 4000);
                }else{
                    $(".register_msg").fadeIn().html(response);
                    setTimeout(() => {
                        $(".register_msg").fadeOut()
                    }, 4000);
                }
            }
        });
    });

    // User Login
    $(document).submit("#form_login", function(e){
        e.preventDefault();
        let email = $("#log_email").val();
        let pass = $("#log_password").val();
        $.ajax({
            type: "POST",
            url: `${domain}/includes/templates/save_user.php?get=login`,
            data: {log_email: email, pass: pass},
            success: function (log_response) {
                if(log_response == 1){

                    var seconds = 5;
                    function incrementSeconds() {
                        seconds -= 1;
                        $(".login_msg").removeClass('alert-danger').addClass('alert-success').fadeIn().html("Logged In Successfully " + seconds);
                    }
                    var cancel = setInterval(incrementSeconds, 1000);

                    $(".overlay").show();
                    setTimeout(() => {
                        $(".login_msg").fadeOut();
                        window.location.href = domain+"/dashboard.php";
                    }, 4000);
                }else if(log_response==0){
                    $(".overlay").hide();
                    $(".login_msg").fadeIn().html("Logged In Failed");
                    setTimeout(() => {
                        $(".login_msg").fadeOut()
                    }, 4000);
                }else{
                    $(".overlay").hide();
                    $(".login_msg").fadeIn().html(log_response);
                    setTimeout(() => {
                        $(".login_msg").fadeOut()
                    }, 4000);
                }
            }
        });
    });
});