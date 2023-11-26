<?php
include "../database/database.php";
$obj = new Database();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!isset($_POST['brand_name']) || !empty($_POST['brand_name'])){
        $data = [
            'brand_name' => $obj->escapeString($_POST['brand_name']),
        ];
    
        $obj->select("brands", "brand_name", null, "brand_name = '{$data["brand_name"]}'",null, null);
        $response = $obj->get_result();
        if(!empty($response[0])){
            echo "Brand name already exists";
        }else{
            $obj->insert("brands",$data);
            $result = $obj->get_result();
            if(is_numeric($result[0])){
                echo 1;
            }else{
                echo 0;
            }
        }
    }else{
        echo "Brand Name Can't be Empty";
    }
}else{
    echo "Invalid Method";
}