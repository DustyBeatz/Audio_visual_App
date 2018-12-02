<?php 

include 'config.php';

if (isset($_GET['video_name'])) {

    $data = get_video_name($conn, $_GET['video_name']);
    echo json_encode($data);
}
else {
    $data = get_all_video($conn);
    echo json_encode($data);
}
?>