$(document).ready(function () {
    const domain = "http://localhost/php_project/inv_project";
    // add category
    $(document).submit("#add_category", function(){
        $.ajax({
            type: "POST",
            url: `${domain}/includes/manage_category.php`,
            data: $("#add_category").serialize(),
            success: function (response) {
                if(response == 1){
                    $(".add_cat").fadeIn().html("Category Insert Successfully");
                    $("#add_category").trigger("reset");
                }else if(response == 0){
                    $(".add_cat").fadeIn().html("Category Insert Failed");

                }else{
                    $(".add_cat").fadeIn().html(response);

                }
            }
        });
    });
});