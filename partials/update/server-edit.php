<?php 
include __DIR__ . '/../database.php';




if (empty($GET['id'])) {
    $id_room = $_GET['id'];

    $sql = "SELECT * FROM `stanze` WHERE `id` = '$id_room'";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('Error Id');
    }
    
} else {
    die('Impossibile ottenere stanza da modificare');
}

$conn->close();
?>