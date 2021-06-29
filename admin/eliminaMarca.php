<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

echo $sql = "delete from marcas where marcaId = ".$id;
echo $sql2 = "delete from produtos where produtoMarcaId = ".$id;
echo $sql3 = "delete from imagens where imagemId = ".$id;

mysqli_query($con,$sql);
mysqli_query($con, $sql2);
mysqli_query($con, $sql3);
header("location: adminMarcas.php");

?>