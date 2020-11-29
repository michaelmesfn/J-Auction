<?php 
    include_once '../dbh.inc.php';

    $prod_name = $_POST['prod_name'];
    $prod_desc = $_POST['prod_desc'];
    $prod_type =  $_POST['prod_type'];

    if(empty($prod_name)){
        $prod_name_error='Please enter a product name';
    }

    if(empty($prod_desc)){
        $prod_desc_error='Please enter the product description';
    }

    if(empty($prod_type)){
        $prod_type_error='Please enter the product type';
    }
   
    if(empty($prod_name_error)){
        include('success.php');
    }else {
        include('product.php');
    }
    $sql = "INSERT INTO product (prod_name, prod_descr, prod_type) VALUES ('$prod_name','$prod_desc','$prod_type');";
    mysqli_query($conn, $sql);
?>


