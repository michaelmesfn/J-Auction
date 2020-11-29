
<?php
    include 'header.php';
?>

    <h1>Search Feedbacks According to their Ratings</h1>
    <form action="ratingcheckresults.php" method="POST" >
        <label>Enter the Rating(Between 1 to 5)</label>
        <input type="number" name="search" required>
        <button type="submit" name="submit-search">Search</button>
    </form>

</body>
</html>