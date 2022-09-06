<?php

require("./config/db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM clientes WHERE  ci = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();
    $results = $record->fetch(PDO::FETCH_ASSOC);

    if (is_countable($results) > 0) {
        $nombre = $results["nombre"];
        $email = $results["email"];
        $tlf1 = $results["telefono1"];
        $tlf2 = $results["telefono2"];
    }
}

if (isset($_POST["update"])) {
    $id = $_GET["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tlf1 = $_POST["tlf_1"];
    $tlf2 = $_POST["tlf_2"];

    $sql = "UPDATE clientes set nombre = '$nombre', email = '$email', telefono1 = '$tlf1', telefono2 = '$tlf2' WHERE ci = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    $_SESSION["message"] = "Los datos del cliente fueron  actualizados satisfactoriamente";
    $_SESSION["message_type"] = "primary";

    header("location: registro_clientes.php");
}

?>

<?php require("./partials/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">

                <form action="edit_clientes.php?id=<?php echo $_GET["id"]; ?>" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualice el nombre">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Actualice el correo electronico">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="tlf_1" value="<?php echo $tlf1; ?>" class="form-control" placeholder="Actualice el número de telefono principal">
                    </div>
                    <div class="input-group mb-3">

                        <input type="text" name="tlf_2" value="<?php echo $tlf2; ?>" class="form-control" placeholder="Actualice el número de telefono secundario">
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