$(document).ready(function () {
    const domain = "http://localhost/php_project/inv_project";
    // user ragistration
    $(document).on("submit","#register_form", function(e){
        e.preventDefault();
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
    $(document).on("submit","#form_login", function(e){
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

    // Add Category
    $(document).on("submit","#add_category", function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: `${domain}/includes/manage_category.php`,
            data: $("#add_category").serialize(),
            success: function (response) {
                if(response == 1){
                    $(".message").removeClass('alert-danger').addClass('alert-success').fadeIn().html("Category Insert Successfully");
                    $("#add_category").trigger("reset");
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }else if(response == 0){
                    $(".message").fadeIn().html("Category Insert Failed");
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }else{
                    $(".message").fadeIn().html(response);
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }
            }
        });
    });

    // Add Brand Name
    $(document).on("submit","#add_brand", function(e){
        e.preventDefault();
        let brandName = $("#brand_name").val();
        if(brandName == ''){
            $("#brand_name").addClass('border-danger');
            $("#brand_error").html('<span class="text-danger">Brand Name Can not Empty</span>');
        }else{
            $("#brand_name").removeClass('border-danger');
            $("#brand_error").hide();
            $.ajax({
                type: "POST",
                url: `${domain}/includes/manage_brands.php`,
                data: {brand_name:brandName},
                success: function (response) {
                    if(response == 1){
                        $(".message").removeClass('alert-danger').addClass('alert-success').fadeIn().html("Brand Name Insert Successfully");
                        $("#add_brand").trigger("reset");
                        setTimeout(() => {
                            $(".message").fadeOut()
                        }, 4000);
                    }else if(response == 0){
                        $(".message").removeClass('alert-success').addClass('alert-danger').fadeIn().html("Brand Name Insert Failed");
                        setTimeout(() => {
                            $(".message").fadeOut()
                        }, 4000);
                    }else{
                        $(".message").removeClass('alert-success').addClass('alert-danger').fadeIn().html(response);
                        setTimeout(() => {
                            $(".message").fadeOut()
                        }, 4000);
                    }
                }
            });
        }
    });

    // Add Product
    $(document).on("submit","#add_product", function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: `${domain}/includes/manage_products.php`,
            data: $("#add_product").serialize(),
            success: function (response) {
                if(response == 1){
                    $(".message").removeClass('alert-danger').addClass('alert-success').fadeIn().html("Product Insert Successfully");
                    $("#add_product").trigger("reset");
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }else if(response == 0){
                    $(".message").removeClass('alert-success').addClass('alert-danger').fadeIn().html("Product Insert Failed");
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }else{
                    $(".message").removeClass('alert-success').addClass('alert-danger').fadeIn().html(response);
                    setTimeout(() => {
                        $(".message").fadeOut()
                    }, 4000);
                }
            }
        });
    });

});