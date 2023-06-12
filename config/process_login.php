<?php



include_once "conection.php";
include_once "url.php";
include_once "getUser.php";


$data = $_POST;



//Criando usuário
if (!empty($data)) {
    $name_reg = $data["name_reg"];
    $email = $data["email"];
    $password = $data["password"];

    $query = "INSERT INTO agenda.usuario (name, email, password) VALUES (:name_reg , :email, :password)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name_reg", $name_reg);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);

    try {
        $stmt->execute();

        $_SESSION["msg"] = "Usuário criado com sucesso";

    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }
    header("Location:" . $BASE_URL . "/../index.php");
}



//Fechar conexão
$conn = null;



?>