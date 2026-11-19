<?php

include "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];

$sql = "UPDATE tb_produtos SET nome = '$nome', categoria = '$categoria', preco = '$preco', qtd = '$quantidade' WHERE id = id";

if ($conexao->query($sql)) {
    echo"Produto Atualizado com sucesso!";

}else{
    echo"Erro ao atualizar produto.";

}
echo "<br><a href ='listar.php'>voltar para a lista</a>";
?>