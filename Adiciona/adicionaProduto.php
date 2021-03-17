<?php
include_once("includes/body.inc.php");
?>
<h1>Adicionar novo produto</h1>
<form action="../Confirma/confirmaAdicionaProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="produtoNome"><br>
    <label>Log&oacutetipo:</label>
    <input type="file" name="logoProduto"><br>
    <input type="Submit" value="Adiciona"
    <a href="admin/adminProdutos.php"></a><br>

