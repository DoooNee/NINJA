<?php
require_once 'config.php';


$query = "SELECT MAX(id) AS max_id FROM user_info"; 
$result = mysqli_query($conn, $query);

$sodangkytruoc = array();
while($row = mysqli_fetch_array($result, 1)){
    $sodangkytruoc[] = $row;
}

$res = [
    "soUserDangKyTruoc" => $sodangkytruoc[0]['max_id']
];

$conn->close();

echo json_encode($res);
exit;

?>