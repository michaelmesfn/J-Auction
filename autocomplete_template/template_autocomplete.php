<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/stylesearch.css">
<!-- jQuery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</head>
<body>

<script type="text/javascript">
    $(function(){
        $("#place").autocomplete({
            source: 'ajaxautocomplete.php',
        });
    });

</script>

    <h1>Search orders Required according to Address: </h1>
    <form action="placeresults.php" method="POST">
        <label>Order Adress: </label>
        <input type="text" id="place" name="place" placeholder="Enter Order Address" required><br><br>
    </form>
</body>
</html>
