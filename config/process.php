<?php


include_once "conection.php";
include_once "url.php";

session_start();

$data = $_POST;
//modificacao de dados
if (!empty($data)) {

    //criar contato
    if ($data["type"] === "create") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observation = $data["observation"];

        $query = "INSERT INTO agenda.contacts (name, phone, observation, usuario_id)
        VALUES (:name , :phone, :observation, :id)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $_SESSION['id']);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } elseif ($data['type'] === "alter") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observation = $data["observation"];
        $id = $data['id'];

        $query = "UPDATE agenda.contacts
                SET name = :name,
                 phone = :phone ,
                  observation = :observation
                   where id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $observation);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato alterado com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }


    } elseif ($data["type"] === "remove") {

        $name = $data["name"];
        $id = $data["id"];

        $query = "DELETE FROM agenda.contacts where id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "$name excluido com sucesso";

        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }
    //Levar o usuário para o index
    // Redirect HOME

    header("Location:" . $BASE_URL . "/../admin.php");

    //seleção de dados
} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET['id'];
    }

    if (!empty($id)) {

        $query = "SELECT * FROM agenda.contacts WHERE id = :id AND usuario_id = :user_id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":user_id", $_SESSION['id']);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();

    } else {

        $contacts = [];

        $query = "select * from agenda.contacts WHERE usuario_id = :user_id";



        $stmt = $conn->prepare($query);

        $stmt->bindParam(":user_id", $_SESSION['id']);

        $stmt->execute();

        $contacts = $stmt->fetchAll();


    }
}

//Fechar conexão
$conn = null;