<?php

    $host = "localhost";
    $dbname = "ludostore";
    $user = "root";
    $pass = "";

    try {

        $conn_clients = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar o modo de erros
        $conn_clients->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }