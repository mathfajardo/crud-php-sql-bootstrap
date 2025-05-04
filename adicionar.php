<?php
    // incluindo o arquivo de conexão
    include('conexao.php');

    // verificando se o formulário foi enviado
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $nacionalidade = $_POST['nacionalidade'];
    $profissao = $_POST['profissao'];
    // criando a query
    $sql = "INSERT INTO dados (nome, idade, altura, nacionalidade, profissao) VALUES ('$nome', '$idade', '$altura', '$nacionalidade', '$profissao')";
    // executando a query
    $query = mysqli_query($conn, $sql);
    // verificando se a query foi executada com sucesso
    if ($query) {
        echo "<script>alert('Dados inseridos com sucesso!');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Erro ao inserir dados!');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
    // fechando a conexão
    mysqli_close($conn);
    exit();
?>