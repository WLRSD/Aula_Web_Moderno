<?php
include_once('conn.php');

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome_comp'];
    $cpf = $_POST['cpf'];
    $data_nasc = $_POST['data_nasc'];
    $diag = $_POST['diag'];
    $presc = $_POST['presc'];
    $cuidados = $_POST['cuidados'];

    $insert = mysqli_query($conn, "INSERT INTO bancophp.paciente(id, nome_comp, data_nasc, cpf, diag, presc, cuidados)
    VALUES (null, '$nome', '$data_nasc', '$cpf', '$diag', '$presc', '$cuidados')");
    
    if($insert == false){
        
        header('Location: /projeto-med-php/cadastro.php?sucesso=nao');
    }else{
        header('Location: /projeto-med-php/cadastro.php?sucesso=sim');
    }
}