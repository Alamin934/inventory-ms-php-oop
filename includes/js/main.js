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
                    $(".alert").fadeIn().html("User Registration Successfully");
                    setTimeout(() => {
                        $(".alert").fadeOut()
                    }, 4000);
                    $("#register_form").trigger("reset");
                }else{
                    $(".alert").fadeIn().html("User Registration Failed");
                    setTimeout(() => {
                        $(".alert").fadeOut()
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
                    $(".alert").fadeIn().html("Logged In Successfully");
                    setTimeout(() => {
                        $(".alert").fadeOut()
                        window.location.replace(domain+"/dashboard.php");
                    }, 4000);
                }else if(log_response==0){
                    $(".alert").fadeIn().html("Logged In Failed");
                    setTimeout(() => {
                        $(".alert").fadeOut()
                    }, 4000);
                }else{
                    $(".alert").fadeIn().html(log_response);
                    setTimeout(() => {
                        $(".alert").fadeOut()
                    }, 4000);
                }
            }
        });
    });
});