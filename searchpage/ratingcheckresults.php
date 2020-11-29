
<?php
    include 'ratingcheck.php';
?>



<div class="article-container">
<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM feedback WHERE sellers_rating = $search ";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        echo "<h4>There are ".$queryResult." results!</h4>
            <h3>Feedbacks with requested rating are as follows: </h3>";
        if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='detail.php?title=".$row['f_id']."><div class='items-box'>
                        <h1>Feedback Id:".$row['f_id']."</h1>
                    </a>";
            }
        }
        else{
            echo "There are no results matching your search !";
        }
    }
?>

</div>