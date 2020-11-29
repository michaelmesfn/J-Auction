
<?php 
    include_once '../dbh.inc.php';
    $login_id = $_POST['login_id'];
    $sellers_rating = $_POST['sellers_rating'];
    $sellers_descr = $_POST['sellers_descr'];

    if(empty($sellers_rating)){
        $rating_error="Please enter a seller's rating";
    }

   
    if(empty($rating_error)){
        include('success.php');
    }else {
        include('feedback.php');
    }
    $sql = "INSERT INTO feedback (login_id, sellers_rating, sellers_descr) VALUES ('$login_id', '$sellers_rating','$sellers_descr');";
    mysqli_query($conn, $sql);
?>


