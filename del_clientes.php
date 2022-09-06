<?php

require("./config/db.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM clientes WHERE ci = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    if(!$record) {
        die("Query failed");
    }

    $_SESSION["message"] = "Cliente removido satisfactoriamente";
    $_SESSION["message_type"] = "danger";
    header("location: registro_clientes.php");
}