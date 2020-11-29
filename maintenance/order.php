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
    <title>Orders</title>
    <link rel="stylesheet" href="../css/styleinput.css">
</head>
<body>
    <div class="container">
        <form action="orderform.php" method="POST">
            <h1 class="header">Order Form</h1>
            <div class="field">
                <label>Order Date: </label><br>
                <input type="date" name="o_date" placeholder="DD-MM-YYYY">
                <?php if(isset($date_error)){ ?>
                    <p><?php echo $date_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Order Total: </label><br>
                <input type="number" step="any" name="o_total">
                <?php if(isset($total_error)){ ?>
                    <p><?php echo $total_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Order Address: </label><br>
                <input type="text" name="o_address" placeholder="Address">
                <?php if(isset($address_error)){ ?>
                    <p><?php echo $address_error ?></p>
                <?php } ?>
            </div>

            <div class="field">
                <label>Order Status: </label><br>

                    <select name="o_status" class="status">
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                    </select>
                  

            </div>

            <button type="submit" class="submit">Submit</button><br>
            <a href="maintenances.php">Maintenance</a>

        </form>
    </div>
    
</body>
</html>
