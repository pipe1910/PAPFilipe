<?php
include_once ("../includes/body.inc.php");

$nome=addslashes($_POST['produtoNome']);
$descricao=addslashes($_POST['produtoDescricao']);
$preco=floatval($_POST['produtoPreco']);
$id=intval($_POST['produtoId']);

$sql="Update produtos set produtoNome='".$nome."', produtoDescricao='".$descricao."', produtoPreco='".$preco."'";
$sql.=" where produtoId=".$id;
mysqli_query($con,$sql);
header("location:../admin/adminProdutos.php");
?>