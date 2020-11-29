<?php 
session_start();
if($_SESSION['id']=== false || !isset($_SESSION['id'])){
    header("location: ../adminlogin/adminlogin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance</title>
    <link rel="stylesheet" href="../css/styleinput.css">
</head>
<body>

    <div class="container">
        <h1> Maintenance</h1>
        <a href="user.php">User Register</a><br>
        <a href="product.php">Add Products</a><br>
        <a href="order.php"> Add Orders</a><br>
        <a href="feedback.php"> Add Feedbacks</a><br>
        <a href="sells.php"> Sells Products</a><br>
        <a href="bids.php"> Bids Products</a><br>
        <br><br><br>
        <a href="../index.php">Main Page</a><br>
        <a href="../adminlogin/logout.php">Log out as Admin</a>

    </div>
i
</body>
</html>