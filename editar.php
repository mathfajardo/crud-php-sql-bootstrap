<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<?php
    // incluir arquivo
    include('conexao.php');
    // verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $altura = $_POST['altura'];
        $pais = $_POST['pais'];
        $profissao = $_POST['profissao'];

        // vtualizar o registro no banco de dados
        $sql = "UPDATE dados SET 
                    nome = '$nome', 
                    idade = $idade, 
                    altura = $altura, 
                    pais = '$pais', 
                    profissao = '$profissao' 
                WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            echo "<div class=\"alert alert-success\" role=\"alert\">
                    Registro atualizado com sucesso!
                  </div>";
            echo "<a href='ler_dados.php' class=\"btn btn-primary\">Voltar</a>";
            exit();
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                    Erro ao atualizar o registro: " . mysqli_error($conn) . "
                  </div>";
        }
    }

    // caso contrário, carregar os dados para edição
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM dados WHERE id = $id");
    $resultData = mysqli_fetch_assoc($result);

    $nome = $resultData['nome'];
    $idade = $resultData['idade'];
    $altura = $resultData['altura'];
    $pais = $resultData['pais'];
    $profissao = $resultData['profissao'];
?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>



