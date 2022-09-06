<?php require("./config/db.php"); ?>

<?php require("./partials/header.php"); ?>

<div class="container p-4">
    <p class="h3 text-center">REGISTRAR FRANQUICIA</p>
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

                <form action="./save_franquicia.php" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="rif_franqc" class="form-control" placeholder="RIF">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="nom_franqc" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="direc_franqc" class="form-control" placeholder="Dirección">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                    </div>
                    <!-- Menu select con valores de la base de datos -->
                    <!-- <select class="form-select mb-3" aria-label="Default select example" name="especialidad">
                        <option selected disabled>Especialidad</option>
                        <?php
                        $query = "SELECT * FROM tipos_de_servicio";
                        $record = $conn->prepare($query);
                        $record->execute();

                        while ($option = $record->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . $option["cod"] . '">' . $option["nombre"] . '</option>';
                        } ?>
                    </select> -->
                    <button class="btn btn-success" name="save_franquicia">
                        Añadir Franquicia
                    </button>
                </form>
            </div>
        </div>

        <div class="col-4 pt-4">
            <button class="btn btn-lg btn-outline-light" name="registrar">
                <a href="./registro_franquicia.php"><i class="fa-solid fa-address-card fa-2xl"></i></a>
            </button>
        </div>

    </div>
</div>


<?php require("./partials/footer.php"); ?>