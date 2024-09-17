<?php
include_once('header.php')
?>

<main class="principal">
    <div class="conteudos">
        <form class="row g-3" action="action/form_cadastro.php" method="post">
            <div class="col-md-6">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome_comp" name="nome_comp" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" oninput="mascara(this)" id="cpf" name="cpf" required placeholder="123.123.123-12">
            </div>
            <div class="col-md-6">
                <label class="form-label">Data Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" required name="data_nasc">
            </div>
            <div class="col-md-6">
                <label class="form-label">Diagnóstico</label>
                <input type="text" class="form-control" id="diag" required name="diag">
            </div>
            <div class="col-12">
                <label class="form-label">Prescrição</label>
                <input type="text" class="form-control" id="presc" required name="presc">
            </div>

            <div class="col-12">
                <label class="form-label">Cuidados</label>
                <input type="text" class="form-control" id="cuidados" required name="cuidados">
            </div>

            <div class="col-12">
                <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

</main>

<script>
    function mascara(i) {

        var v = i.value;

        if (isNaN(v[v.length - 1])) {
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

    }
</script>

<?php
if (isset($_GET['sucesso'])) {
    if ($_GET['sucesso'] == 'sim') {
        echo '
            <script>alert("Paciente cadastrado com sucesso!")</script>
        ';
    }
    if ($_GET['sucesso'] == 'nao') {
        echo '
    <script>alert("Paciente não cadastrado!")</script>
';
    }
}
?>