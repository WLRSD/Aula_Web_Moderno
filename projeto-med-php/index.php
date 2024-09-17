<?php
if (!isset($_SESSION["matricula"])){
    header("Location: /projeto-med-php/login.php");   
}

include_once('header.php');
?>



<main class="principal">
    <div class="text-centro">
        <h2>Pacientes</h2>
    </div>
    <div class="conteudos">


        <?php
        while($value = mysqli_fetch_assoc($paciente)) {
            echo '
            <div class="paciente">
            <div class="button-edit">
            <form action="edit.php" method="post">
            <input type="hidden" name="id" value="'.$value['id'].'">
            <button type="submit" name="editar" value="'.$value['id'].'" class="btn btn-sm mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg>
            </button>
            </form>
            <form action="action/excluir.php" method="post">
            <input type="hidden" name="id" value="'.$value['id'].'">
            <button type="submit" name="excluir" value="'.$value['id'].'" class="btn btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
            </button>
            </form>
            </div>
            <h4 class="separador"><b>Nome:</b> ' . $value['nome_comp'] . '</h4>
            <span class="separador mt-2"><b>Data Nascimento:</b> ' . $value['data_nasc'] . '</span>            
            <span class="separador mt-2"><b>CPF:</b> ' . $value['cpf'] . '</span>            
            <span class="separador mt-2"><b>Diagnóstico:</b> ' . $value['diag'] . '</span>            
            <span class="separador mt-2"><b>Prescrição:</b> ' . $value['presc'] . '</span>             
            <span class="separador mt-2"><b>Cuidados:</b> ' . $value['cuidados'] . '</span>             
        </div>
            ';
        }
        ?>

    </div>
</main>

<?php 
if(isset($_GET['edit'])){
    if($_GET['edit'] == 'falso'){
        echo '
            <script>alert("Edição não realizada!")</script>
        ';
    }
    if($_GET['edit'] == 'vdd'){
        echo '
            <script>alert("Edição realizada!")</script>
        ';
    }
}

if(isset($_GET['excluido'])){
    if($_GET['excluido'] == 'nao'){
        echo '
            <script>alert("Paciente não excluído!")</script>
        ';
    }
    if($_GET['excluido'] == 'sim'){
        echo '
            <script>alert("Paciente Excluído!")</script>
        ';
    }
}

?>