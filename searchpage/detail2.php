<?php
    include 'header.php';
?>
<h1> Detail for the selected Product is follows: </h1>
    <div class="items-container">
        <?php
            $title=mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM product WHERE prod_id='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='items-box'>
                        <h3>Product Id:".$row['prod_id']."</h3>
                        <h3>Product Name:".$row['prod_name']."</h3>
                        <h3>Product Description: ".$row['prod_descr']."</h3>
                        <h3>Product Type: ".$row['prod_type']."</h3>
                    </div>";
                }
            }
        ?>
    </div>

</body>
</html>