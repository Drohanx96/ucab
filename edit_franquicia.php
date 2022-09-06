<?php

require("./config/db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM franquicia WHERE  rif = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();
    $results = $record->fetch(PDO::FETCH_ASSOC);

    if (is_countable($results) > 0) {
        $nombre = $results["nombre"];
        $direccion = $results["direccion"];
        $ciudad = $results["ciudad"];
    }
}

if (isset($_POST["update"])) {
    $id = $_GET["id"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];

    $sql = "UPDATE franquicia set nombre = '$nombre', direccion = '$direccion', ciudad = '$ciudad' WHERE rif = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    $_SESSION["message"] = "La franquicia fue actualizada satisfactoriamente";
    $_SESSION["message_type"] = "primary";

    header("location: registro_franquicia.php");
}

?>

<?php require("./partials/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">

                <form action="edit_franquicia.php?id=<?php echo $_GET["id"]; ?>" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualice el nombre">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Actualice la dirección">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="ciudad" value="<?php echo $ciudad; ?>" class="form-control" placeholder="Actualice la ciudad">
                    </div>

                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require("./partials/footer.php") ?>