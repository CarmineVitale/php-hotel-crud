<?php 
include __DIR__ . '/../env.php';

//connessione
$conn = new mysqli($server_name, $username, $password, $db_name);

//controllo connessione
if ($conn && $conn->connect_error) {
    die('Error');
} 
?>