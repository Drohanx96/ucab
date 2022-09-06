<?php
require("./config/db.php");

$message = "";

if (isset($_POST["save_franquicia"])) {

    $sql = "INSERT INTO franquicia (rif, nombre, direccion, ciudad) VALUES (:rif, :nom, :direc, :ciudad)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":rif", $_POST["rif_franqc"]);
    $stmt->bindParam(":nom", $_POST["nom_franqc"]);
    $stmt->bindParam(":direc", $_POST["direc_franqc"]);
    $stmt->bindParam(":ciudad", $_POST["ciudad"]);
    $stmt->execute();

    $_SESSION["message"] = "Franquicia añadida satisfactoriamente";
    $_SESSION["message_type"] = "success";

    header("location: franquicia.php");
}
