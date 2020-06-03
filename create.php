<?php 

include __DIR__ . '/partials/templates/head.php'
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h1>Crea Nuova Camera</h1> 
                    </h1>
                </header>

                <form action="./partials/create/server.php" method="POST">
                    <div class="form-group">
                        <label for="room_number"> Numero Camera</label>
                        <input class="form-control" type="number" id="room_number" name="room_number">
                    </div>
                    <div class="form-group">
                        <label for="beds"> Numero Letti</label>
                        <input class="form-control" type="number" id="beds" name="beds">
                    </div>
                    <div class="form-group">
                        <label for="floor"> Piano</label>
                        <input class="form-control" type="number" id="floor" name="floor">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Crea">
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/partials/templates/footer.php' ?>