<?php
    session_start();
    include_once("helpers/url.php");
    $try = $_POST;

    // Testing login 

    if(!empty($try["email"]) && !empty($try["pass"])) 
    {
        include_once("conn_banco_de_dados.php");

        $email = $try["email"];
        $pass = $try["pass"];

        $query = "SELECT * FROM clientes WHERE email = :email AND pass = :pass";

        $stmt = $conn_clients->prepare($query);

        $stmt->bindParam("email", $email);
        $stmt->bindParam("pass", $pass);

        $stmt->execute();

        // The IF below is to find a line on database using "fetch()"
        if(!empty($result = $stmt->fetch())) 
        {
            $_SESSION["email"] = $email;
            $_SESSION["pass"] = $pass;
            header("Location: ". $BASE_URL . "../usuario_logado.php");
        } else 
        {
            unset($_SESSION["email"]);
            unset($_SESSION["pass"]);
            header("Location: ". $BASE_URL . "../login.php");
        }
}