<?php 
include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/templates/head.php';

//alert
if ( !empty($_GET['canc']) ) { ?>
    <div class="alert alert-success">
        Stanza cancellata.
    </div>
<?php  } ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <header>
                <h1>Hotel California</h1>
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th>Codice</th>
                        <th>Numero</th>
                        <th>Piano</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!empty($rooms)) { 
                        foreach ($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td><?php echo $room['floor']; ?></td>
                            <td><a href="./show.php?id=<?php echo $room['id']; ?>"> Visualizza</a></td>
                            <td>Modifica</td>
                            <td>
                                <form action="./partials/delete/server.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                                    <input class="btn btn-danger" type="submit" value="Cancella">
                                </form>
                            </td>
                        </tr>  
                    <?php }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/partials/templates/footer.php' ?>
    