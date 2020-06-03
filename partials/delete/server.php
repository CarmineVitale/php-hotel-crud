<?php 
include __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('Error Id');
}
$id_room = $_POST['id'];

// $sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
// $result = $conn->query($sql);
// //affectede rows maggiore di 0 (ha modificato davvero qualcosa)
// if ($result && $conn->affected_rows > 0) {
//     header("Location: $base_path?canc=1");
// } elseif ($result) {
//     echo 'Nessuna stanza';
// } else {
//     echo 'Errorw query';
// }


// $conn->close();

include __DIR__ . '/../functions.php';
$url = "$base_path?canc=1";

remove($conn, 'stanze', $id_room, $url);
?>