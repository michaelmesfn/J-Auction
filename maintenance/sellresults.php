<?php 
    include_once '../dbh.inc.php';

    $check= "SELECT login_id FROM USERS;";
    $result1= mysqli_query($conn, $check);

    $check= "SELECT prod_id FROM PRODUCT;";
    $result2= mysqli_query($conn, $check);

    $login_id = $_POST['login_id'];
    $product_id= $_POST['prod_id'];


    if(empty($login_id)){
        $login_id_error='Please enter a login id';
    }
    if(empty($product_id)){
        $product_id_error='Please enter a product id';
    }

    if(empty($login_id_error) && empty($product_id_error)){
        include('success.php');
    }else {
        include('sells.php');
    }
    $sql= "INSERT INTO sells (login_id, prod_id) VALUES ('$login_id', '$product_id');";
    mysqli_query($conn, $sql);
?>