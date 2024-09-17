<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Vina+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<?php
session_start();
include_once('action/query.php');
include_once('action/conn.php');
if (!isset($_SESSION["matricula"])) {
    header("Location: /projeto-med-php/login.php");
}
?>

<body>

    <header class="cabecalho">
        <div class="logo">
            <a href="index.php">
                <div class="img-logo">
                    <img class="logo-img" src="assets/img/logohosp.png" alt="">
                </div>
                <h1>MED CARE</h1>
            </a>
            <p class="m-5" style="color: white;">Olá, <?= $_SESSION["nome"] ?>! </p>

        </div>
        <div class="menu">
            <a href="cadastro.php">Cadastrar Paciente</a>
            <a href="index.php">Pacientes</a>
        </div>
    </header>


</body>