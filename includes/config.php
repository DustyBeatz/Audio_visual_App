<?php
$host = "localhost";
$user = "root";
$password = "root"; 
$db = "db_avapp";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "something broke ... connection isn't working";
    exit;
}


while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

if (isset($_GET["testInfo"])){
    $info = $_GET["testInfo"];

    $myQuery = "SELECT * FROM tbl_test WHERE test = '$info'";
    $result = mysqli_query($conn, $myQuery);
    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
}

echo json_encode($rows);
?>