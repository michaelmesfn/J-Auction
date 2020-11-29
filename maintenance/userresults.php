
<?php 
    include_once '../dbh.inc.php';

    $username = $_POST['u_name'];
    $email= $_POST['u_email'];
    $password= $_POST['u_pwd1'];
    $password2= $_POST['u_pwd2'];

    if(empty($username)){
        $name_error='Please insert your username';
    }

    if(empty($email)){
        $email_error='Please insert your email';
    }

    if(empty($password)){
        $password_error='Please insert your password';
    }

    if($password != $password2){
        $password_match_error='Please enter the same passwords';
    }

    if(empty($name_error) && empty($email_error) && empty($password_error) && empty($password_match_error)){
        include('success.php');
    }else {
        include('user.php');
    }

    $sql= "INSERT INTO users (u_name, u_email, u_pwd) VALUES ('$username', '$email', '$password');";
    mysqli_query($conn, $sql);
?>

