
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../css/styleadminform.css">
</head>
<body>
     <form class="adminform" action="adminlogin.inc.php" method="post">
     	<h2>Login As Admin</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button><br><br>

		<a href="../index.php">Back to Home Page</a>
     </form>
</body>
</html>

<?php 
include_once 'footer.php';
?>