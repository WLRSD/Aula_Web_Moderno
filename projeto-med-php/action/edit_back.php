<?php

include_once('conn.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome_comp'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $diag = $_POST['diag'];
    $presc = $_POST['presc'];
    $cuidados = $_POST['cuidados'];

    $sqlUp = "UPDATE bancophp.paciente SET nome_comp = '$nome', data_nasc = '$data_nasc',
    cpf = '$cpf', diag = '$diag', presc = '$presc', cuidados = '$cuidados'  WHERE id = $id";

    $result = $conn -> query($sqlUp);

    if($result == false){
        header('Location: /projeto-med-php/index.php?edit=falso');
    }else{
        header('Location: /projeto-med-php/index.php?edit=vdd');

    }
}
