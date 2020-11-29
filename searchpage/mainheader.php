<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../css/styleheader.css">
</head>
<body>
    <div class="navcontainer">
        <nav class="nav-bar">
            <ul class="nav-start">

            <li><form class="form-check" method="POST">
                <input type="text" name="search" placeholder="Search here...">
                </form>
            </li>
            <li class="logos">
                <i class="fas fa-search fa-2x"></i>
            </li>
            </ul>

                <ul class="nav-mid">

                <li> <a class="nav-check" href='searchpage.php'> Search Page</a> </li>
                    <li> <a href='../index.php'><div class="logo">
                        <img src= ../img/logo.png></a></li>
                        <?php
                            if(isset($_SESSION["id"])){
                                echo "<li> <a href='../maintenance/maintenances.php'> Maintenance</a> </li>";
                            }
                            else{
                                echo "<li> <a href='../adminlogin/adminlogin.php'> Maintenance</a> </li>";
                            }
                            ?>
                </ul>

            
                <ul class="nav-right">
                    <li><a href='#modal' class="modal-triger">Login</a></li>
                    <li><a href='#modals' class="modal-triger">Register</a></li>
                    <li><a href='#'><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
        </nav>
    </div>
</body>
</html>