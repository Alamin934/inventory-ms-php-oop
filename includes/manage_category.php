<?php
include "../database/database.php";

$obj = new Database();
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(!isset($_POST['category_name']) || !empty($_POST['category_name'])){
        $cat_name = $obj->escapeString($_POST['category_name']);
        $parent_cat = $obj->escapeString($_POST['parent_cat']);
        $categories = [
            'parent_cat' => $parent_cat,
            'category_name' => $cat_name,
        ];

        $obj->select("category", "category_name", null, "category_name = '{$cat_name}'",null, null);
        $response = $obj->get_result();
        if(!empty($response[0])){
            echo "Category name already exists";
        }else{
            $obj->insert("category",$categories);
            $result = $obj->get_result();
            if(is_numeric($result[0])){
                echo 1;
            }else{
                echo 0;
            }
        }

    }else{
        echo "Fields Can't Empty";
    }
}
?>
