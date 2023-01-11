<?php
$conn = mysqli_connect("localhost", "root", "", "ninja_db");


$query = "SELECT * FROM dangkytruoc WHERE id = 1"; 
$result = mysqli_query($conn, $query);
$sodangkytruoc = array();
while($row = mysqli_fetch_array($result, 1)){
    $sodangkytruoc[] = $row;
}

echo $sodangkytruoc[0]['dangkytruoc'];
exit;
