<?php

$host = "127.0.0.1";
$dataBase = "agenda";
$name = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host = $host; dbname = $dataBase", $name, $pass);

    //Ativa modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: $error";
}


?>