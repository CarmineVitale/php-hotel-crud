<?php 
include __DIR__ . '/partials/show/server.php';
include __DIR__ . '/partials/templates/head.php'
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h1>Dettagli Camera numero <?php echo $room['room_number']; ?></h1> 
                    </h1>
                </header>

                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Codice: <?php echo $room['id']; ?> </li>
                        <li class="list-group-item">Numero camera: <?php echo $room['room_number']; ?></li>
                        <li class="list-group-item">Posti letto: <?php echo $room['beds']; ?></li>
                        <li class="list-group-item">Piano: <?php echo $room['floor']; ?></li>
                    </ul>
                </div>
                <a href="./">Torna indietro</a>
            </div>
        </div>
    </div>
    <?php include __DIR__ . '/partials/templates/footer.php' ?>