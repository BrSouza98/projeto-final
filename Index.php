<?php

var_dump($_GET);

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?Pagina=Filme">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="?Pagina=CadastrarFilme">Cadastrar Filmes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (!empty($_GET)) {
    switch ($_GET['Pagina']) {
      case 'Filme':
        include_once('view/Filme/Index.php');
      break;

      case 'CadastrarFilme':
        include_once('view/Filme/CadastrarFilme.php');
      break;

      default:
        include_once('view/Erro.php');
        break;
    }
  } else {
    echo ("<h1>Bem-vindo a nossa página de filmes!!</h1>");
  }
  ?>
  </main>

  <footer class="container-flud bg-secondary mt-5 mb-5">
    <p class="text-center text-light"><b>Rodapé da página</b></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>