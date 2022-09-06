<?php require("./config/db.php"); ?>

<?php require("./partials/header.php"); ?>

<div class="container p-4">
    <p class="h3 text-center">REGISTRAR CLIENTE</p>
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

                <form action="./save_clientes.php" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="ci_cliente" class="form-control" placeholder="Cedula">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="nom_cliente" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="email_cliente" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="tlfn_cliente_1" class="form-control" placeholder="Telefono 1">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="tlfn_cliente_2" class="form-control" placeholder="Telefono 2">
                    </div>
                    <button class="btn btn-success" name="save_cliente">
                        Añadir Cliente
                    </button>
                </form>
            </div>
        </div>

        <div class="col-4 pt-4">
            <button class="btn btn-lg btn-outline-light" name="registrar">
                <a href="./registro_clientes.php"><i class="fa-solid fa-address-card fa-2xl"></i></a>
            </button>
        </div>

    </div>
</div>


<?php require("./partials/footer.php"); ?>