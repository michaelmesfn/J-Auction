<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance</title>
    <link rel="stylesheet" href="styleinput.css">
</head>
<body>

    <div class="container">
        <h1> Input Form Links</h1>
        <?php
            if(isset($_SESSION["id"])){
                echo "<a href='user.php'> User Register</a><br>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> User Register</a> <br>";
            }

            if(isset($_SESSION["id"])){
                echo " <a href='product.php'> Add Products</a> <br>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> Add Products</a> <br>";
            }

            if(isset($_SESSION["id"])){
                echo "<a href='order.php'> Add Orders</a> <br>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> Add Orders</a> <br>";
            }

            if(isset($_SESSION["id"])){
                echo "<a href='feedback.php'> Add Feedbacks</a> <br>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> Add Feedbacks</a> <br>";
            }

            if(isset($_SESSION["id"])){
                echo "<a href='sells.php'> Sells Products</a> <br>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> Sells Products</a> <br>";
            }

            if(isset($_SESSION["id"])){
                echo "<a href='bids.php'> Bids Products Products</a> </li>";
            }
            else{
                echo "<a href='../adminlogin/adminlogin.php'> Bids Products</a> </li>";
            }
        ?>
        
        <br><br><br>
        <a href="index.php">Main Page</a>

    </div>
    
</body>
</html>