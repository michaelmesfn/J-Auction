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
    <title>User</title>
    <link rel="stylesheet" href="../css/styleinput.css">
</head>
<body>

    <div class="container">
        <form action="userresults.php" method="POST">
            <h1 class="header">User Form</h1>
            <div class="field">
                <label>Username: </label><br>
                <input type="text" name="u_name" placeholder="Username">
                <?php if(isset($name_error)){ ?>
                    <p><?php echo $name_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Email: </label><br>
                <input type="text" name="u_email" placeholder="E-mail address">
                <?php if(isset($email_error)){ ?>
                    <p><?php echo $email_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Password: </label><br>
                <input type="password" name="u_pwd1" placeholder="Password">
                <?php if(isset($password_error)){ ?>
                    <p><?php echo $password_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Repeat Password: </label><br>
                <input type="password" name="u_pwd2" placeholder="Password">
                <?php if(isset($password_match_error)){ ?>
                    <p><?php echo $password_match_error ?></p>
                <?php } ?>
            </div>

            <button type="submit" class="submit">Submit</button><br>
            <a href="maintenances.php">Maintenance</a>

        </form>
    </div>


    
</body>
</html>
