<?php
    include 'header.php';
?>

<script type="text/javascript">
    $(function(){
        $("#place").autocomplete({
            source: 'placeajax.php',
        });
    });

</script>

    <h1>Search orders Required according to Address and Status: </h1>
    <form action="placeresults.php" method="POST">
        <label>Order Adress: </label>
        <input type="text" id= "place" name="place" placeholder="Enter Order Address" required><br><br>


        <label>Order Status: </label> 
        
        <select name="o_status" class="status">
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
        </select><br><br>


        <button type="submit" name="submit-search">Search</button>
    </form>
</body>
</html>
