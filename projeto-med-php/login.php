<?php
include_once('action/query.php');
include_once('action/conn.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Vina+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="w-100 h-100 d-flex flex-column justify-content-center align-items-center bg-light">
  <div class="w-100 text-center mb-4">
    <h1>Bem-vindo!</h1>
  </div>
  <div class="w-50 h-50 d-flex justify-content-center align-items-center rounded-3" style="background-color: blue; box-shadow: 26px 24px 10px 5px rgba(0,0,0,0.38);">
    <div class="w-50 h-100 d-flex justify-content-center align-items-center">
      <div class="w-50 h-50" style="background-color: white; border-radius: 50%; background-image:url('assets/img/logohosp.png'); background-size: cover; background-position: center;">

      </div>
    </div>
    <div class="w-50 h-100 p-4 d-flex flex-column justify-content-center align-items-center">
      <form action="action/login_back.php" method="post" class="w-50 h-50 p-1 d-flex flex-column justify-content-between align-items-center">
        <div>
          <label class="form-label" style="color: white;">Matrícula: </label>
          <input class="form-control" type="text" name="matricula" maxlength="8">
        </div>
        <div>
          <label class="form-label" style="color: white;">Senha: </label>
          <input class="form-control" type="password" name="senha" maxlength="8">
        </div>
        <button class="btn btn-sm btn-success" name="entrar" type="submit">Entrar</button>
      </form>
    </div>
  </div>

  <?php
  session_start();
  if (isset($_SESSION["erro-login"])) {
    echo '
        <div class="modal" id="erroModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Erro no login!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       ' . $_SESSION["erro-login"] . '
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <script>

        window.onload = function() {
            $("#erroModal").modal("show");
        };
    </script>
        ';
    unset($_SESSION['erro-login']);
  }
  ?>

</body>