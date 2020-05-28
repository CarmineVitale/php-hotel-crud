<?php 

include __DIR__ . '/../database.php';

$sql = 'SELECT * FROM `stanze`';
$result = $conn->query($sql);


if ($result && $result->num_rows > 0) {
    $rooms = [];
    while ($row = $result->fetch_assoc()) {
        //echo 'Codice camera:' . $row['id'] . 'Piano:' . $row['floor'] . 'Numero camera:' . $row['room_number'] . '<br>';
        //echo "Codice camera:  {$row['id']}  Piano:  {$row['floor']}  Numero camera: {$row['room_number']}  <br>";
        $rooms[] = $row;
    }
} else if ($result) {
    echo 'Nessun risultato';
} else {
    echo 'errore query';
}
$conn->close();
?>