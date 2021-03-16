<?php
include_once("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$prodnome=addslashes($_POST['produtoNome']);
$prodpreco=intval($_POST['produtoPreco']);
$prodDescricao=addslashes($_POST['produtoDescricao']);
$produtomarcaId=$_POST['produtoMarcaId'];


echo $sql="insert into produtos(produtoNome,produtoDescricao,produtoPreco,produtoMarcaId) 
values('".$prodnome."','".$prodDescricao."','".$prodpreco."','".$produtomarcaId."'); ";
mysqli_query($con,$sql);
print_r($sql);
//header("location: admin.php");
?>
