<?php
include '../dbh.inc.php';

function get_place($conn, $term){
    $query = "SELECT * FROM product WHERE prod_name LIKE '%$term%';";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $data;
}

if(isset($_GET['term'])){
    $getplace=get_place($conn, $_GET['term']);
    $placeArray= array();
    foreach ($getplace as $prods){
        $placeArray[]=  $prods['prod_name'];
    }
    echo json_encode($placeArray);
}