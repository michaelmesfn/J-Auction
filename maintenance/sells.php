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
        <form action="sellresults.php" method="POST">
            <h1 class="header">Sell Products </h1>

            <div class="field">
                <label> Login Id</label><br>
                <select name="login_id">
                    <?php foreach ($result1 as $so) :?>
                        <option value="<?= $so['login_id']; ?>"></option>      
                    <?php endforeach; ?>        
                </select>
                <?php if(isset($login_id_error)){ ?>
                    <p><?php echo $login_id_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label> Product Id</label><br>
                <select name="prod_id">
                    <?php foreach ($result2 as $so) :?>
                        <option value="<?= $so['prod_id']; ?>"></option>      
                    <?php endforeach; ?>        

                </select>
                <?php if(isset($product_id_error)){ ?>
                    <p><?php echo $product_id_error ?></p>
                <?php } ?>
            </div>

            <button type="submit" class="submit">Submit</button><br>
            <a href="maintenances.php">Maintenance</a>

        </form>
    </div>
    
</body>
</html>