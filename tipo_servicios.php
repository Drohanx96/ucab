<?php require("./config/db.php"); ?>

<?php require("./partials/header.php"); ?>

<div class="container p-3">
    <p class="h3 text-center">REGISTRAR SERVICIO</p>
</div>

<div class="container">
    <?php if (isset($_SESSION["message"])) { ?>
        <div class="alert alert-<?= $_SESSION["message_type"]; ?> alert-dismissible fade show text-center" role="alert">
            <?= $_SESSION["message"]; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php session_unset();
    } ?>
</div>

<div class="container pb-5">

    <div class="row">

        <div class="col-8 mx-auto">

            <div class="card card-body">

                <form action="./save_servicio.php" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="id_serv" class="form-control" placeholder="Codigo">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="nom_serv" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">

                        <textarea name="desc_serv" rows="2" class="form-control" placeholder="Descripción del servicio"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="save_servicio" value="Añadir Servicio">
                </form>
            </div>
        </div>

        <div class="col-4 pt-4">
            <button class="btn btn-lg btn-outline-light" name="registrar">
                <a href="./registro_servicios.php"><i class="fa-solid fa-address-card fa-2xl"></i></a>
            </button>
        </div>

    </div>
</div>


<?php require("./partials/footer.php"); ?>