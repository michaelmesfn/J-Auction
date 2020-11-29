<?php
include '../dbh.inc.php';

function get_place($conn, $term){
    $query = "SELECT * FROM orders WHERE o_address LIKE '%$term%';";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $data;
}

if(isset($_GET['term'])){
    $getplace=get_place($conn, $_GET['term']);
    $placeArray= array();
    foreach ($getplace as $place){
        $placeArray[]=  $place['o_address'];
    }
    echo json_encode($placeArray);
}