<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['marcaId']);
$empresaId=intval($_POST['imagemProdutoId']);
$imagem=$_FILES['imagemURL']['name'];
$novoNome="imagens/".$imagem;

copy($_FILES['logoMarcaId']['tmp_name'],$novoNome);

echo $sql="insert into canais(produtoNome,marcaLogoURL,produtoMarcaId) 
values('".$nome."','imagens/".$imagem."',".$empresaId.");";
mysqli_query($con,$sql);
header("location:adicionaproduto.php");
?>
