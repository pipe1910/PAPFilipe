<?php
include_once("../includes/body.inc.php");

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$id=intval($_POST['idProduto']);
$nome=addslashes($_POST['nomeImagem']);
$imagem=$_FILES['logoImagem']['name'];
$novoNome="images/".$imagem;

copy($_FILES['logoImagem']['tmp_name'],"../".$novoNome);

echo $sql="insert into imagens(imagemNome,imagemURL,imagemProdutoId,imagemId) 
values('".$nome."','".$novoNome."','".$id."',0);";
mysqli_query($con,$sql);
header("location:../admin/adminImagens.php?id={$id}");
?>