<?php
include_once("conn.php");

if(isset($_POST["entrar"])){
    $matricula = $_POST["matricula"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM bancophp.usuarios WHERE matricula = '$matricula' AND senha_usuario = '$senha'";
    $sql = mysqli_query($conn, $query);

    $sql_rows = mysqli_num_rows($sql);
    if($sql_rows == 0){
        session_start();
        $_SESSION["erro-login"] = "Matrícula ou senha incorreta!";
        session_write_close();
        
        header("Location: /projeto-med-php/login.php");
    }
}