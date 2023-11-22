$(document).ready(function () {
    const domain = "http://localhost/php_project/inv_project";
    // Add/Save user
    $(document).submit("#register_form", function(){
        $.ajax({
            type: "POST",
            url: `${domain}/includes/templates/save_user.php`,
            data: $("#register_form").serialize(),
            success: function (response) {
                console.log(response);
            }
        });
    })
});