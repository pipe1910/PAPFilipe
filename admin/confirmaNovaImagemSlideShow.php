<?php
include_once("../includes/body.inc.php");

$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$id=intval($_POST['idProduto']);
$nome=addslashes($_POST['nomeImagem']);
$imagem=$_FILES['logoImagem']['name'];
$novoNome="images/".$imagem;

copy($_FILES['logoImagem']['tmp_name'],"../".$novoNome);

$sql="insert into slideshow(idslideshow, URLSlideShow) 
values('".$id."',0);";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con); // último ID automático
// se não existe nenhuma imagem em destaque a útlima fica em destaque
$sql="Select * from slideshow where idslideshow =".$id;
mysqli_query($con,$sql);

header("location:adminSlideShow.php?id=".$id);
?>