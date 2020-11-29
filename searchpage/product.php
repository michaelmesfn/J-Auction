<?php
    include 'header.php';
?>

<script type="text/javascript">
    $(function(){
        $("#prods").autocomplete({
            source: 'ajaxproduct.php',
        });
    });

</script>
<h1>Search items According to Products Name</h1>
    <form action="searchresults.php" method="POST">
        <label><h3>Items with given products name are: </h3></label><br>
        <input type="text" id="prods" name="prods" placeholder="Enter Products Name" required>
        <button type="submit" name="submit-search">Search</button>
    </form>
  
</div>
</body>
</html>