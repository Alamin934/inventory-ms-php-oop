<?php
    require "../../database/database.php";
    if($_SERVER['REQUIEST_METHOD'] == "POST"){
        // User Registration
        if($_POST['first_name'] == '' || empty($_POST['first_name'])){
            echo "First Name is Empty";
        }elseif($_POST['last_name'] == '' || empty($_POST['last_name'])){
            echo "Last Name is Empty";
        }elseif($_POST['username'] == '' || empty($_POST['username'])){
            echo "User Name is Empty";
        }elseif($_POST['email'] == '' || empty($_POST['email'])){
            echo "Email is Empty";
        }elseif($_POST['password1'] == '' || empty($_POST['password1'])){
            echo "Password is Empty";
        }elseif($_POST['password2'] == '' || empty($_POST['password2'])){
            echo "Re-Enter Password is Empty";
        }elseif($_POST['password1'] != $_POST['password2']){
            echo "Password and Re-Enter Password Doesn't Matched";
        }elseif(!isset($_POST['usertype']) || empty($_POST['usertype'])){
            echo "User Type is Not Set";
        }else{
            $obj = new Database();
            $register_data = [
                'first_name' => $obj->escapeString($_POST['first_name']),
                'last_name' => $obj->escapeString($_POST['last_name']),
                'username' => $obj->escapeString($_POST['username']),
                'email' => $obj->escapeString($_POST['email']),
                'password' => md5($obj->escapeString($_POST['password1'])),
                'user_type' => $obj->escapeString($_POST['usertype']),
                'register_date' => date('d-M-Y'),
                'last_login' => date('d-M-Y h:i:s'),
                'notes' => '',
            ];
            
            // Check username is exists
            $check_username = $obj->select('users', 'username', null, "username = '{$register_data["username"]}'", null, null);
            $username_exist = $obj->get_result();
            // Check email is exists
            $check_email = $obj->select('users', 'email', null, "email = '{$register_data["email"]}'", null, null);
            $email_exist = $obj->get_result();

            if(!empty($username_exist)){
                echo "Username Already Exists";
            }elseif(!empty($email_exist)){
                echo "Email Already Exists";
            }else{
                $obj->insert('users', $register_data);
                $response = $obj->get_result();
                if(is_numeric($response[0])){
                    echo "Registered Successfully";
                }else{
                    echo "User Registration Failed";
                }
            }
        }

        // User Login
        if($_POST['log_email'] == '' || empty($_POST['log_email'])){
            echo "Email is Empty";
        }elseif($_POST['log_password'] == '' || empty($_POST['log_password'])){
            echo "Pasword is Empty";
        }else{
            $login_data = [
                'email' => $obj->escapeString($_POST['log_email']),
                'password' => md5($obj->escapeString($_POST['log_email'])),
            ];

            $login_email=$obj->select("users", null, "email = '{$login_data["email"]}'", null, null);
            $email_exist = $obj->get_result();
            print_r($email_exist);

            $login_pass=$obj->select("users", null, "password = '{$login_data["password"]}'", null, null);
            $pass_exist = $obj->get_result();
            print_r($pass_exist);
            
            if(empty($email_exist)){
                echo "Email Doesn't Matched";
            }elseif(empty($pass_exist)){
                echo "Password Doesn't Matched";
            }else{
                echo "Login Successfull";
            }
        }

    }