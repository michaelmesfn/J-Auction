<?php
    include 'header.php';
?>
<h1> Detail for the selected Feedback is follows: </h1>
    <div class="items-container">
        <?php
            $title=mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM feedback WHERE f_id='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='items-box'>
                    <h1>Feedback Id:".$row['f_id']."</h1>
                    <h1>Login Id: ".$row['login_id']."</h1>
                    <h1>Sellers Rating: ".$row['sellers_rating']."</h1>
                    <h1>Sellers Description: ".$row['sellers_descr']."</h1>
                </div>";
                }
            }
        ?>
    </div>

    
</body>
</html>