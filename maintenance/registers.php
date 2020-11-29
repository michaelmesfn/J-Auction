
<?php 
    include_once 'dbh.inc.php';

    $username = $_POST['u_name'];
    $email= $_POST['u_email'];
    $password= $_POST['u_pwd1'];
    $password2= $_POST['u_pwd2'];


    if($password != $password2){
        $password_match_error='Please enter the same passwords';
    }

    if(empty($password_match_error)){
        include('success.php');
    }

    $sql= "INSERT INTO USERS (u_name, u_email, u_pwd) VALUES ('$username', '$email', '$password');";
    mysqli_query($conn, $sql);
?>
