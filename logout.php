<?php 
session_start();
if(isset($_SESSION["username"])){
    session_unset();
    session_destroy();

    header("Location: http://localhost/php_project/inv_project");
}


