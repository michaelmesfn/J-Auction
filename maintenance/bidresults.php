<?php 
    include_once '../dbh.inc.php';
    $check= "SELECT login_id, u_name FROM USERS;";
    $result1= mysqli_query($conn, $check);

    $check= "SELECT prod_id, prod_name FROM PRODUCT;";
    $result2= mysqli_query($conn, $check);

    
    $login_id = $_POST['login_id'];
    $product_id= $_POST['prod_id'];
    $bidstartprice = $_POST['bid_start_price'];


    if(empty($login_id)){
        $login_id_error='Please enter a login_id';
    }
    if(empty($product_id)){
        $product_id_error='Please enter a product_id';
    }
    if(empty($bidstartprice)){
        $bid_start_error='Please enter a bid starting price';
    }

    if(empty($login_id_error) && empty($product_id_error) && empty($bid_start_error)){
        include('success.php');
    }else {
        include('bids.php');
    }
    $sql= "INSERT INTO bids (login_id, prod_id, bid_start_price) VALUES ('$login_id', '$product_id', '$bidstartprice');";
    mysqli_query($conn, $sql);
?>