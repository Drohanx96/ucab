<?php

require("./config/db.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM tipos_de_servicio WHERE  cod = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();
    $results = $record->fetch(PDO::FETCH_ASSOC);

    if (is_countable($results) > 0) {
        $nombre = $results["nombre"];
        $descripcion = $results["descripcion"];
    }
}

if(isset($_POST["update"])) {
    $id = $_GET["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sql = "UPDATE tipos_de_servicio set nombre = '$nombre', descripcion = '$descripcion' WHERE cod = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    $_SESSION["message"] = "El servicio fue actualizado satisfactoriamente";
    $_SESSION["message_type"] = "primary";

    header("location: registro_servicios.php");
}

?>

<?php require("./partials/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">

                <form action="edit_serv.php?id=<?php echo $_GET["id"]; ?>" method="POST">

                    <div class="input-group mb-3">

                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualice el nombre">
                    </div>
                    <div class="input-group mb-3">

                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Actualice la descripción"><?php echo $descripcion; ?></textarea>
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