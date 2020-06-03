<?php 
//funzione per select all(*) in una tabella
function getAll($conn, $table) {
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);


    if ($result && $result->num_rows > 0) {
        $records = [];
        while ($row = $result->fetch_assoc()) {
            //echo 'Codice camera:' . $row['id'] . 'Piano:' . $row['floor'] . 'Numero camera:' . $row['room_number'] . '<br>';
            //echo "Codice camera:  {$row['id']}  Piano:  {$row['floor']}  Numero camera: {$row['room_number']}  <br>";
            $records[] = $row;
        }
    } else if ($result) {
        $records = [];
    } else {
        $records = false;
    }
    $conn->close();

    return $records;
}

function getById($conn, $table, $id) {

    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } else if ($result) {
        $record = [];
    } else {
        $record = false;
    }

    $conn->close();

    return $record;

}

function remove($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);
    //affectede rows maggiore di 0 (ha modificato davvero qualcosa)
    if ($result && $conn->affected_rows > 0) {
        header("Location: $url");
    } elseif ($result) {
        echo 'Nessuna stanza';
    } else {
        echo 'Errore query';
    }


    $conn->close();
}
  

?>