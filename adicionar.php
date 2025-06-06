<?php
    // incluindo o arquivo de conexão
    include('conexao.php');

    // verificando se o formulário foi enviado
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $pais = $_POST['pais'];
    $profissao = $_POST['profissao'];

    // tirando espaços antes e depois da string
    $nome = trim($nome);
    $idade = trim($idade);
    $altura = trim($altura);
    $pais = trim($pais);
    $profissao = trim($profissao);
    // protejendo contra SQL Injection
    $nome = mysqli_real_escape_string($conn, $nome);
    $idade = mysqli_real_escape_string($conn, $idade);
    $altura = mysqli_real_escape_string($conn, $altura);
    $pais = mysqli_real_escape_string($conn, $pais);
    $profissao = mysqli_real_escape_string($conn, $profissao);
    // criando a query
    $sql = "INSERT INTO dados (nome, idade, altura, pais, profissao) VALUES ('$nome', '$idade', '$altura', '$pais', '$profissao')";
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