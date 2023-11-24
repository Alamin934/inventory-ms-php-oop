<?php
session_start();
if(isset($_SESSION["username"])){
	header("Location: http://localhost/php_project/inv_project/dashboard.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inventory Management System</title>
        <link rel="stylesheet" href="includes/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="includes/css/bootstrap.min.css">
        <link rel="stylesheet" href="includes/css/style.css">
    </head>
    <body> 

        <!-- Navbar -->
        <?php //include_once("includes/templates/navbar.php"); ?>

        <!-- Message -->
        <div class="alert alert-success" role="alert"></div>

        <!-- Login Form -->
        <div class="card mx-auto mt-5" style="width: 25rem;">
            <img class="card-img-top mx-auto" style="width:50%;" src="includes/images/login.png" alt="Login Icon">

            <div class="card-body">
                <form id="form_login">
                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
                        <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    <!-- Password Field -->
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
                        <small id="p_error" class="form-text text-muted"></small>
                    </div>

                    <!-- Login & Register Button -->
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Login</button>
                        <a class="btn btn-secondary" href="register.php">Register</a>
                    </div>
                </form>
            </div>
            <!-- Forgot Password Link -->
            <div class="card-footer"><a class="btn text-primary p-0" href="#">Forgot Password ?</a></div>
        </div>
        

        <script src="includes/js/jquery-3.7.1.min.js"></script>
        <script src="includes/js/bootstrap.bundle.min.js"></script>
        <script src="includes/js/main.js"></script>
    </body>
</html>