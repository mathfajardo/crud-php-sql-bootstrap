<?php
    // incluir conexão
    include('conexao.php');

    // receber o id
    $id = $_GET['id'];

    // deletar da db
    $result = mysqli_query($conn, "DELETE FROM dados WHERE id = $id");

    // redireciona para a página
    header("Location: ler_dados.php");
?>