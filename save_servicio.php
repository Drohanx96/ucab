<?php
require("./config/db.php");

$message = "";

if (isset($_POST["save_servicio"])) {

    $sql = "INSERT INTO tipos_de_servicio (cod, nombre, descripcion) VALUES (:id, :nom, :desc)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST["id_serv"]);
    $stmt->bindParam(":nom", $_POST["nom_serv"]);
    $stmt->bindParam(":desc", $_POST["desc_serv"]);
    $stmt->execute();

    $_SESSION["message"] = "Servicio guardado satisfactoriamente";
    $_SESSION["message_type"] = "success";

    header("location: tipo_servicios.php");
}
