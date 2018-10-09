<?php

include "cabecalho.php";

$nome = $_GET['nome'];
$preco = $_GET['preco'];

$conexao = mysqli_connect('localhost', 'root', '1234', 'loja');

$query = "INSERT INTO produtos(nome, preco) VALUES('{$nome}', {$preco})";

$inserirProduto = mysqli_query($conexao, $query);

if($inserirProduto){
    echo "<p class='alert-success'>Produto <?=$nome?>, <?=$preco?> adicionado com sucesso!</p>";
}else{
    $erro = mysqli_error($conexao);
    echo "<p class='alert-danger'>O Produto não foi adicionado: ".$erro."</p>";
}

include "rodape.php"
?>