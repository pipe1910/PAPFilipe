<?php
include_once("../includes/body.inc.php");
$id = intval($_GET['id']);
echo $sql = "delete from produtos where produtoId = ".$id;
echo $sql2 = "delete from imagens where imagemProdutoId = ".$id;

mysqli_query($con, $sql2);
mysqli_query($con, $sql);

header("location:adminProdutos.php");
?>