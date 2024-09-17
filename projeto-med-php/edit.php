<?php


if (!empty($_POST['editar'])) {


    include_once('action/conn.php');

    $id = $_POST['id'];

    $select = "SELECT * FROM medcare.paciente WHERE id = $id ";
    
    $result = $conn -> query($select); 
    if ($result->num_rows > 0) {
        while ($value = mysqli_fetch_assoc($result)) {

            $nome = $value['nome_comp'];
            $cpf = $value['cpf'];
            $data_nasc = $value['data_nasc'];
            $diag = $value['diag'];
            $presc = $value['presc'];
            $cuidados = $value['cuidados'];
        }
    } else {
        header('Location:/projeto_med/index.php');
    }
}

?>



<?php
include_once('header.php');
?>

<main class="principal">
    <div style="width: 100%;margin: 10px;">

        <a href="index.php" class="btn btn-primary mx-3">Voltar</a>
    </div>

    <div class="conteudos-edit">
        <form class="row g-3" action="action/edit_back.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">    
        <div class="col-md-6">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome_comp" name="nome_comp" value="<?php echo $nome ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input type="numer" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf ?>" placeholder="12312312312">
            </div>
            <div class="col-md-6">
                <label class="form-label">Data Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" value="<?php echo $data_nasc ?>" name="data_nasc">
            </div>
            <div class="col-md-6">
                <label class="form-label">Diagnóstico</label>
                <input type="text" class="form-control" id="diag" value="<?php echo $diag ?>" name="diag">
            </div>
            <div class="col-12">
                <label class="form-label">Prescrição</label>
                <input type="text" class="form-control" id="presc" value="<?php echo $presc ?>" name="presc">
            </div>

            <div class="col-12">
                <label class="form-label">Cuidados</label>
                <input type="text" class="form-control" id="cuidados" value="<?php echo $cuidados ?>" name="cuidados">
            </div>

            <div class="col-12">
                <button type="submit" name="update" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>

</main> 
