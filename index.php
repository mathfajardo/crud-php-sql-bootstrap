<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark text-white vh-100">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ler_dados.php">Remover/Editar dados</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h2 class="text-center mt-4">Adicione dados ao banco!</h1>
      <div class="w-100 mx-auto p-4 shadow rounded bg-light text-dark" style="max-width: 500px;">
        <form action="adicionar.php" method="POST">
            <div class="mb-3">
              <label for="" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Idade</label>
              <input type="number" class="form-control" name="idade" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Altura</label>
              <input type="number" class="form-control" name="altura" step="0.01" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">País</label>
              <input type="text" class="form-control" name="pais" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Profissão</label>
              <input type="text" class="form-control" name="profissao" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
