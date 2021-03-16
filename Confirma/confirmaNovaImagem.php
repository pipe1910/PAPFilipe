<?php
include_once("includes/body.inc.php");

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$nome=addslashes($_POST['nomeImagem']);
$imagem=$_FILES['logoImagem']['name'];
$novoNome="images/".$imagem;

copy($_FILES['logoImagem']['tmp_name'],$novoNome);

echo $sql="insert into imagens(imagemNome,imagemURL) 
values('".$nome."','images/".$imagem."');";
mysqli_query($con,$sql);
header("location:adminImagens.php");
?>