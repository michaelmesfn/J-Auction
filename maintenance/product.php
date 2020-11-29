<?php 
session_start();
if($_SESSION['id']=== false || !isset($_SESSION['id'])){
    header("location: ../adminlogin/adminlogin.php");
}
?>

<html>

<head>
    <title>
        PRODUCT ADD</title>
    <link rel="stylesheet" href="../css/styleinput.css">
</head>

<body>
    
    <form action="productadd.php" class="container" method="POST">
    <h1>PRODUCT ADDING PAGE</h1>
        <div class="field">
            <label>Product Name <br></label>
            <input type="text" name=prod_name placeholder="Product Name">
            <?php if(isset($prod_name_error)){ ?>
                    <p><?php echo $prod_name_error ?></p>
                <?php } ?>
        </div>
        <div class="field">
            <label>Product Description <br></label>
            <input type="text" name=prod_desc placeholder="Product Description">
        </div>
        <div class="field">
            <label>Product Type <br></label>
            <input type="text" name=prod_type placeholder="Product Type">
        </div>
        <div>
        <button type="submit" class="submit">Submit</button><br>
        <a href="maintenances.php">Maintenance</a>
        </div>
    </form>
</body>

</html>