<?php

include "config.php";
$tipo = $_GET['tipo'];

$conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM puntuaciones WHERE tipopartida = '$tipo' ORDER BY puntos DESC LIMIT 10";

$s = $conn->prepare($sql);
$s->execute();

$resultados = $s->fetchAll();

$numRes = count($resultados);

$conn = null;

if(!$resultados){
    echo '1';
}else{
    if($numRes >= 10 & $_GET['puntos'] <= $resultados[$numRes - 1]['puntos']){
        echo '0';
    }else{
        echo json_encode($resultados);
    }    
}




