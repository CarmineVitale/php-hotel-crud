<?php 
include __DIR__ . '/partials/update/server-edit.php';
include __DIR__ . '/partials/templates/head.php'
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h1>Modifica Camera <?php echo $room['room_number']; ?></h1> 
                    </h1>
                </header>

                <form action="./partials/update/server-update.php" method="POST">
                    <div class="form-group">
                        <label for="room_number"> Numero Camera</label>
                        <input class="form-control" type="number" id="room_number" name="room_number" value="<?php echo $room['room_number']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="beds"> Numero Letti</label>
                        <input class="form-control" type="number" id="beds" name="beds" value="<?php echo $room['beds']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="floor"> Piano</label>
                        <input class="form-control" type="number" id="floor" name="floor" value="<?php echo $room['floor']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                        <input class="btn btn-primary" type="submit" value="Salva">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/partials/templates/footer.php' ?>