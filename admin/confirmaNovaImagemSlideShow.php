<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$imagem=$_FILES['logoImagem']['name'];
$novoNome="../images/".$imagem;

copy($_FILES['imagem']['tmp_name'],$novoNome);

echo $sql="insert into slideshow(URLSlideShow) values('images/".$imagem."');";
mysqli_query($con,$sql);

header("location:../admin/adminSlideShow.php");
?>
