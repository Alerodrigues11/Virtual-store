<?php

    $host = "localhost";
    $dbname = "ludostore";
    $user = "root";
    $pass = "";

    try {

        $conn_clients = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Error mode on
        $conn_clients->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        // Connection error
        $error = $e->getMessage();
        echo "Erro: $error";
    }