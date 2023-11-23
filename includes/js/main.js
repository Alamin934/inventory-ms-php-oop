$(document).ready(function () {
    const domain = "http://localhost/php_project/inv_project";
    // user ragistration
    $(document).submit("#register_form", function(){
        $.ajax({
            type: "POST",
            url: `${domain}/includes/templates/save_user.php`,
            data: $("#register_form").serialize(),
            success: function (response) {
                if(response){
                    $(".alert").fadeIn().html(response);
                    setTimeout(() => {
                        $(".alert").fadeOut()
                    }, 4000);
                    $("#register_form").trigger("reset");
                }
            }
        });
    });

    // User Login
    $(document).submit("#form_login", function(){
        $.ajax({
            type: "POST",
            url: `${domain}/includes/templates/save_user.php`,
            data: $("#form_login").serialize(),
            success: function (response) {
                // if(response){
                //     $(".alert").fadeIn().html(response);
                //     setTimeout(() => {
                //         $(".alert").fadeOut()
                //     }, 4000);
                //     $("#form_login").trigger("reset");
                // }
                console.log(response)
            }
        });
    });
});