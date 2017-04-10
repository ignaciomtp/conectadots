<?php

include "config.php";
$nombre = htmlspecialchars($_POST['nombre']);
$puntos = htmlspecialchars($_POST['puntos']);
$tipo = htmlspecialchars($_POST['tipo']);
$fecha = date("Y-m-d");

$conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$sql = "INSERT INTO puntuaciones (nombre, tipopartida, puntos, fecha) VALUES "
        . "(:nom, :tipo, :ptos, :fech)";

$s = $conn->prepare($sql);
$s->bindValue(":nom", $nombre);
$s->bindValue(":tipo", $tipo);
$s->bindValue(":ptos", $puntos);
$s->bindValue(":fech", $fecha);

$s->execute();

$sql2 = "SELECT * FROM puntuaciones WHERE tipopartida = '$tipo' ORDER BY puntos DESC LIMIT 10";

$t = $conn->prepare($sql2);
$t->execute();

$resultados = $t->fetchAll();

echo json_encode($resultados);