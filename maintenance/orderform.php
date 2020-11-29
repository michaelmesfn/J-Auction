<?php 
    include_once '../dbh.inc.php';

    $orderdate = $_POST['o_date'];
    $ordertotal= $_POST['o_total'];
    $orderaddress= $_POST['o_address'];
    $orderstatus = $_POST['o_status'];

    if(empty($orderdate)){
        $date_error='Please enter a date';
    }

    if(empty($ordertotal)){
        $total_error='Please enter the total';
    }

    if(empty($orderaddress)){
        $address_error='Please enter the address';
    }
   
    if(empty($date_error) && empty($total_error) && empty($address_error)){
        include('success.php');
    }else {
        include('order.php');
    }
    $sql= "INSERT INTO orders (o_date, o_total, o_status, o_address) VALUES ('$orderdate', '$ordertotal', '$orderstatus', '$orderaddress');";
    mysqli_query($conn, $sql);
?>

