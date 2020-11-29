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
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/styleinput.css">
</head>
<body>
    <div class="container">
        <form action="buyersfeedback.php" method="POST">
            <h1 class="header">Add Feedbacks</h1>
            <div class="field">
            <label>Login Id</label><br>
             <input type="number" name=login_id placeholder="Sellers Rating" required>
            </div>

            <div class="field">
            <label>Rating</label><br>
             <input type="number" name=sellers_rating placeholder="Sellers Rating">
            </div>

            <div class="field">
            <label>Comments</label>
             <input type="text" name=sellers_descr placeholder="Sellers Description">
            </div>

            <button type="submit" class="submit">Submit</button><br>
            <a href="maintenances.php">Maintenance</a>

        </form>
    </div>
    
</body>
</html>