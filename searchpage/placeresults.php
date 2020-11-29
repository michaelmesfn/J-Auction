<?php
    include 'place.php';
?>

<div class="article-container">
<?php
    if(isset($_POST['submit-search'])) {
        $search1 = mysqli_real_escape_string($conn, $_POST['place']);
        $search2 = mysqli_real_escape_string($conn, $_POST['o_status']);
        $sql = "SELECT * FROM orders WHERE o_address='$search1' && o_status LIKE '%$search2%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        echo "<h4>There are ".$queryResult." results!</h4>
            <h3>Feedbacks with requested rating are as follows: </h3>";
        if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='detail3.php?title=".$row['o_id']."><div class='items-box'>
                        <h3>Order Id: ".$row['o_id']."</h3>
                    </a>";
            }
        }
        else{
            echo "There are no results matching your search !";
        }
    }
?>
</div>