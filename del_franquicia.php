<?php

require("./config/db.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM franquicia WHERE rif = '$id'";
    $record = $conn->prepare($sql);
    $record->execute();

    if(!$record) {
        die("Query failed");
    }

    $_SESSION["message"] = "Franquicia removida satisfactoriamente";
    $_SESSION["message_type"] = "danger";
    header("location: registro_franquicia.php");
}