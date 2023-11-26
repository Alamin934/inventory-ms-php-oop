<?php
include "../database/database.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    // User Registration
    if($_POST['product_name'] == '' || empty($_POST['product_name'])){
        echo "Product Name is Empty";
    }
    elseif(!isset($_POST['select_cat']) || empty($_POST['select_cat'])){
        echo "Category not selected";
    }
    elseif(!isset($_POST['select_brand']) || empty($_POST['select_brand'])){
        echo "Brand not selected";
    }
    elseif($_POST['product_price'] == '' || empty($_POST['product_price'])){
        echo "Price is Empty";
    }
    elseif($_POST['product_qty'] == '' || empty($_POST['product_qty'])){
        echo "Product Quantity is Empty";
    }
    else{
        $obj = new Database();
        $pd_data = [
            'c_id' => $obj->escapeString($_POST['select_cat']),
            'b_id' => $obj->escapeString($_POST['select_brand']),
            'product_name' => $obj->escapeString($_POST['product_name']),
            'product_price' => $obj->escapeString($_POST['product_price']),
            'product_qty' => md5($obj->escapeString($_POST['product_qty'])),
            'added_date' => date('d-M-Y'),
        ];
        
        // Insert Product
        $obj->insert('products', $pd_data);
        $response = $obj->get_result();
        if(is_numeric($response[0])){
            echo 1;
        }else{
            echo 0;
        }
        
    }
}else{
    echo "Invalid Request Method";
}