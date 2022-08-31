<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">

  <title>Base bootstrap</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Rede-Fotos</a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="?home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?cadastro">Cadastro</a>
            </li>
        </ul>
        <form class="form-inline" method="POST">
            <input class="form-control mr-sm-2"                     name="txtLoginEmail"    type="text"     placeholder="E-mail">
            <input class="form-control mr-sm-2"                     name="txtLoginSenha"    type="password" placeholder="Senha">
            <button class="btn btn-outline-success my-2 my-sm-0"    name="btnLogin"         type="submit">Login</button>
        </form>
    </nav>

  <div class="container-fluid">
    <?php
      require_once 'view/usuario_cadastro.php';
    ?>
  </div>

  <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>