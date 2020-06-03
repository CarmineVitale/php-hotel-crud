<?php 
include_once __DIR__ . '/../database.php';

if (empty($_POST['id'])) {
    die('Error id');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];


// $sql = "UPDATE `stanze` 
// SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor WHERE `id` = $id_room";
// $result = $conn->query($sql);

$sql = "UPDATE `stanze` 
SET `room_number` = ? , `beds` = ?, `floor` = ? , `updated_at` = NOW()  WHERE `id` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);
$stmt->execute();

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $base_path" . "show.php?id=$id_room");
} else if ($stmt) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Query sbagliata';
}

$conn->close();
?>