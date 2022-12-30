<?php

    session_start();

    include_once("url.php");
    include_once("conn_banco_de_dados.php");
    //$_FILE["imagemproduto"]

    $data = $_POST;

    if(!empty($data)) 
    {
        if(!empty($_FILES) && $data["type"] === "create") 
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
        } else if($data["type"] === "edit")
        {
            $nomeProduto = $data["nomeproduto"];
            $precoProduto = $data["precoproduto"];
            $estoque = $data["estoque"];
            $descricaoProduto = $data["descricaoproduto"];
            $id = $data["id"];
            $img = $_FILES["imagemproduto"];
            
            try {
                $procura = "SELECT imagem FROM produtos WHERE id = :id";
                $seleciona = $conn_clients->prepare($procura);
                $seleciona->bindParam(":id", $id);
                $seleciona->execute();
    
                $exibe = $seleciona->fetch();
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro: $error";
            }
    
            if(!empty($img["name"])) 
            {
                $extensao = pathinfo($img["name"], PATHINFO_EXTENSION);
                $imagemNome = md5(uniqid($img["name"])).".".$extensao;
                $uploadFoto=1;
            } else {
                $imagemNome = $exibe["imagem"];
                $uploadFoto=0;
            }
    
            if ($uploadFoto == 1) {
                $diretorio = "../upload/";
                move_uploaded_file($img["tmp_name"], $diretorio.$imagemNome);
            }
    
            $query = "UPDATE produtos SET nome = :nomeProduto, preco = :precoProduto, estoque = :estoque, descricao = :descricaoProduto, imagem = :imagemNome WHERE id = :id";
    
            $stmt = $conn_clients->prepare($query);
            
            $stmt->bindParam(":nomeProduto", $nomeProduto);
            $stmt->bindParam(":precoProduto", $precoProduto);
            $stmt->bindParam(":estoque", $estoque);
            $stmt->bindParam(":descricaoProduto", $descricaoProduto);
            $stmt->bindParam(":imagemNome", $imagemNome);
            $stmt->bindParam(":id", $id);
    
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Produto atualizado com sucesso!";
    
                
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }

        header("Location: ". $BASE_URL . "../editar-lista-produtos.php");

    } else {
    
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

        $stmt->bindParam(":id", $id).

        $stmt->execute();

        $produto = $stmt->fetch();
    } else {
        $produtos = [];

        $query = "SELECT * FROM produtos";

        $stmt = $conn_clients->prepare($query);

        $stmt->execute();

        $produtos = $stmt->fetchAll();
    }

}