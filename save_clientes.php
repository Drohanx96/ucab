<?php
require("./config/db.php");

$message = "";

if (isset($_POST["save_cliente"])) {

    $sql = "INSERT INTO clientes (ci, nombre, email, telefono1, telefono2) VALUES (:ci, :nom, :mail, :tlf1, :tlf2)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":ci", $_POST["ci_cliente"]);
    $stmt->bindParam(":nom", $_POST["nom_cliente"]);
    $stmt->bindParam(":mail", $_POST["email_cliente"]);
    $stmt->bindParam(":tlf1", $_POST["tlfn_cliente_1"]);
    $stmt->bindParam(":tlf2", $_POST["tlfn_cliente_2"]);
    $stmt->execute();

    $_SESSION["message"] = "Cliente añadido satisfactoriamente";
    $_SESSION["message_type"] = "success";

    header("location: clientes.php");
}
