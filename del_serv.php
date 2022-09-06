<?php

require("./config/db.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM tipos_de_servicio WHERE cod = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    if(!$record) {
        die("Query failed");
    }

    $_SESSION["message"] = "Servicio removido satisfactoriamente";
    $_SESSION["message_type"] = "danger";
    header("location: registro_servicios.php");
}