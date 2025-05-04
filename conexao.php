<?php
    // ativando para mostrar erros
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    // criando conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "sistema_crud";
    // conectar
    $conn = mysqli_connect($servidor, $usuario, $senha, $db);
    // checar se deu certo
    /*
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } */
?>