<?php

    include_once("url.php");
    include_once("conn-banco-de-dados.php");

    $data = $_POST;
    if(!empty($data)) 
    {
        $nome = $data["nome"];
        $sobrenome = $data["sobrenome"];
        $phone = $data["phone"];
        $email = $data["email"];
        $pass = $data["pass"];

        $query = "INSERT INTO clientes (nome, sobrenome, phone, email, pass) VALUES (:nome, :sobrenome, :phone, :email, :pass)";

        $stmt = $conn_clients->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":sobrenome", $sobrenome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Cadastro realizado com sucesso!";
          } catch(PDOException $e) {
            // verificando erro
            $error = $e->getMessage();
            echo "Erro: $error";
          }

        header("Location: ". $BASE_URL . "../index.php");

    }
