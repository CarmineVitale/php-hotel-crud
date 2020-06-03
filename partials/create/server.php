<?php 
include __DIR__ . '/../database.php';

if (empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor'])) {
    die('Errore paramentri per creazione nuova stanza');
}
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

$sql = "INSERT INTO `stanze` (`room_number`, `beds`, `floor`, `created_at`, `updated_at`) VALUES (?, ?, ? , NOW(), NOW() );";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $beds, $floor);
$stmt->execute();

if ($stmt && $stmt->insert_id) {
    $id_room = $stmt->insert_id;
    header("Location: $base_path" . "show.php?id=$id_room");
} else {
    echo 'Nessuna stanza creata';
} 


$conn->close();
?>