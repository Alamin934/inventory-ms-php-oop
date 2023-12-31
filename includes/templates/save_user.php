<?php
    require "../../database/database.php";
    
    if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['get']=="registration"){
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
                    echo 1;
                }else{
                    echo 0;
                }
            }
        }
    }


    if($_SERVER['REQUEST_METHOD'] == "POST" && $_GET['get']=="login"){
        $log_msg ="";
        // User Login
        if(!isset($_POST['log_email']) || empty($_POST['log_email'])){
            echo "Email is Empty";
        }elseif($_POST['pass'] == '' || empty($_POST['pass'])){
            echo "Pasword is Empty";
        }else{
            $obj = new Database();
            $email = $obj->escapeString($_POST['log_email']);
            $password = md5($obj->escapeString($_POST['pass']));

            $obj->select("users", "first_name,last_name,user_type,username,last_login", null, "email = '{$email}' AND password = '{$password}'", null, null);
            $data_exist = $obj->get_result();
            
            if(empty($data_exist)){
                $log_msg = "Email and Password Doesn't Matched";
            }else{
                if($data_exist[0] > 0){
                    foreach($data_exist as $row){
                        session_start();
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["first_name"] = $row["first_name"];
                        $_SESSION["last_name"] = $row["last_name"];
                        $_SESSION["user_type"] = $row["user_type"];
                        $_SESSION["last_login"] = $row["last_login"];

                        $data = ['last_login'=>date('d-M-Y H:i:s')];
                        $obj->update("users",$data,"email = '{$email}'");
                        $response = $obj->get_result();
                        if(is_numeric($response[0])){
                            echo 1;
                        }else{
                            echo 0;
                        }
                    }
                }
            }
        }
    }