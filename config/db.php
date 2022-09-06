<?php

session_start();

$server = "localhost";
$database = "ucab-db";
$username = "postgres";
$password = "root";

try {
    $conn = new PDO("pgsql:host=$server; dbname=$database;", $username, $password);

    // echo "Conectado";

} catch (PDOException $e) {
    die("Conection failed: " . $e->getMessage());
}

?>