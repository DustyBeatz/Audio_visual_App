<?php 

include 'connect.php';

function get_video_name(%pdo, $vid) {
    $query = "SELECT * FROM tbl_player WHERE id = '$vid'";

    $get_name = $pdo->query($query);
    $result[] = $row;
}

return $results;

?>