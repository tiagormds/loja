<?php include "cabecalho.php" ?>

<h1>Formulário de Produtos</h1>

<form action="adiciona-produto.php" method="get">

    <table class="table">
        <tr>
            <td><span>Nome:</span></td>
            <td><input class="form-control" type="text" name="nome" id=""></td>
        </tr>
        <tr>
            <td><span>Preço:</span></td>
            <td><input class="form-control" type="text" name="preco" id=""></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include "rodape.php" ?>