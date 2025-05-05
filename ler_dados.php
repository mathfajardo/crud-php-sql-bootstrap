<?php
    include('conexao.php');

    // consulta para buscar os dados
    $sql = "SELECT * FROM dados";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark text-light min-vh-100">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">SISTEMA CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ler_dados.php">Remover/Editar dados</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>

      <h2 class="text-center mt-4">Dados</h1>
      <div class="table-responsive w-75 mx-auto">
          <table class="table table-striped table-bordered table-hover text-center">
              <thead>
                  <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Idade</th>
                  <th scope="col">Altura</th>
                  <th scope="col">País</th>
                  <th scope="col">Profissão</th>
                  <th scope="col">Ações</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    // verificando se tem dados
                      if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                              echo "<tr>";
                              echo "<td>" . $row['nome'] . "</td>";
                              echo "<td>" . $row['idade'] . "</td>";
                              echo "<td>" . $row['altura'] . "</td>";
                              echo "<td>" . $row['pais'] . "</td>";
                              echo "<td>" . $row['profissao'] . "</td>";
                              echo "<td>
                                      <a href=\"form_editar.php?id=$row[id]\" class=\"btn btn-outline-primary sm\">Editar</a>
                                      <a href=\"deletar.php?id=$row[id]\" class=\"btn btn-outline-danger\" onClick=\"return confirm('Tem certeza que deseja deletar esse registro?')\">Excluir</a>
                                  </td>";
                              echo "</tr>";
                          }
                      } else {
                          echo "<tr><td colspan='6'>Nenhum dado encontrado</td></tr>";
                      }
                  ?>
              </tbody>
          </table>
      </div>
    </div>
    
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>