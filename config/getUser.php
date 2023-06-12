<?php
include_once "conection.php";

function getUser()
{
    global $conn;

    try {

        $stmt = $conn->prepare("SELECT * FROM agenda.usuario");
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}