<?php

    session_start();

    include_once("url.php");
    include_once("conn_banco_de_dados.php");
    //$_FILE["imagemproduto"]

    $data = $_POST;

    if(!empty($data) && !empty($_FILES) && $data["type"] === "create") 
    {

        // first CRUD step - CREATE
        $img = $_FILES["imagemproduto"];

        $nomeProduto = $data["nomeproduto"];
        $precoProduto = $data["precoproduto"];
        $estoque = $data["estoque"];
        $descricaoProduto = $data["descricaoproduto"];

        // Modifying the file name to be able to store it in the database

        $extensao = pathinfo($img["name"], PATHINFO_EXTENSION);

        // Encrypting the file name to prevent  the file from being overwritten by another file with the same name

        $imagemNovoNome = md5(uniqid($img["name"])).".".$extensao;

        // Upload the file

        $diretorio = "../upload/";

        move_uploaded_file($img["tmp_name"], $diretorio.$imagemNovoNome);

        $query = "INSERT INTO produtos (nome, preco, estoque, descricao, imagem) VALUES (:nome, :preco, :estoque, :descricao, :imagem)";

        $stmt = $conn_clients->prepare($query);

        $stmt->bindParam(":nome", $nomeProduto);
        $stmt->bindParam(":preco", $precoProduto);
        $stmt->bindParam(":estoque", $estoque);
        $stmt->bindParam(":descricao", $descricaoProduto);
        $stmt->bindParam(":imagem", $imagemNovoNome);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Registro realizado com sucesso!";
        
        } catch(PDOException $e) {
            // verificando erro
            $error = $e->getMessage();
            echo "Erro: $error";
        }

        header("Location: ". $BASE_URL . "../index.php");
    } else 
    
    {
        $id;
    
        if(!empty($_GET)) 
        {
          $id = $_GET["id"];
        }

    // Retorna dado de um post específico
    if(!empty($id)) 
    {
        $query = "SELECT * FROM produtos WHERE id = :id";

        $stmt = $conn_clients->prepare($query);

        $stmt->binParam(":id", $id).

        $stmt->execute();

        $produtos = $stmt->fetch();
    } else {
        $query = "SELECT * FROM produtos";

        $stmt = $conn_clients->prepare($query);

        $stmt->execute();

        $produtos = $stmt->fetchAll();
    }

}