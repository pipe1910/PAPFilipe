<?php
include_once("../includes/body.inc.php");
top_2();
$id = intval($_GET['id']);
$sql="select * from produtos where produtoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<h2 align="center" style="margin-top: 10%">
<form action="../Confirma/confirmaNovaImagem.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idProduto" value="<?php echo $dados['produtoId'] ?>">
    <label>Nome: </label>
    <input type="text" name="nomeImagem"><br>
    <label>Log&oacutetipo:</label>
    <input type="file" name="logoImagem"><br>
    <br>

    <input type="Submit" value="Adiciona">

