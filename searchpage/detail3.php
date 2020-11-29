<?php
    include 'header.php';
?>
<
<h1> Detail for the selected Order is follows: </h1>
    <div class="items-container">
        <?php
            $title=mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM orders WHERE o_id='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='items-box'>
                    <h3>Order Id: ".$row['o_id']."</h3>
                    <h3>Order Date: ".$row['o_date']."</h3>
                    <h3>Order Total: ".$row['o_total']."</h3>
                    <h3>Order Status: ".$row['o_status']."</h3>
                    <h3>Order Address: ".$row['o_address']."</h3>
                </div>";
                }
            }
        ?>
    </div>

  
</body>
</html>