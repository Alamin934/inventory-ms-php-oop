<?php
    require "../../database/database.php";
    $error="";
    if($_POST['first_name'] == '' || empty($_POST['first_name'])){
        echo $error = "First Name is Empty";
    }elseif($_POST['last_name'] == '' || empty($_POST['last_name'])){
        echo $error = "Last Name is Empty";
    }elseif($_POST['username'] == '' || empty($_POST['username'])){
        echo $error = "User Name is Empty";
    }elseif($_POST['email'] == '' || empty($_POST['email'])){
        echo $error = "Email is Empty";
    }elseif($_POST['password1'] == '' || empty($_POST['password1'])){
        echo $error = "Password is Empty";
    }elseif($_POST['password2'] == '' || empty($_POST['password2'])){
        echo $error = "Re-Enter Password is Empty";
    }elseif($_POST['password1'] != $_POST['password2']){
        echo $error = "Password and Re-Enter Password Doesn't Matched";
    }elseif(!isset($_POST['usertype']) || empty($_POST['usertype'])){
        echo $error = "User Type is Not Set";
    }else{
        $obj = new Database();
        $register_data = [
            'first_name' => $obj->escapeString($_POST['first_name']),
            'last_name' => $obj->escapeString($_POST['last_name']),
            'user_name' => $obj->escapeString($_POST['username']),
            'email' => $obj->escapeString($_POST['email']),
            'password' => md5($obj->escapeString($_POST['password1'])),
            'user_type' => $obj->escapeString($_POST['usertype']),
            'register_date' => date('d-M-Y'),
            'last_login' => date('d-M-Y h:i:s'),
            'notes' => '',
        ];

        $check_username = $obj->select('users', 'username', null, "username = '{$register_data["user_name"]}'", null, null);
        $username_exist = $obj->get_result();
        
        $check_email = "SELECT email FROM users WHERE email = '{$register_data["email"]}'";
        $email_query = $obj->mysqli->query($check_email);
        if($username_query){
            echo $error = "Username Already Exists";
        }elseif($email_query){
            echo $error = "Email Already Exists";
        }else{
            $obj->insert('users');
        }
    }