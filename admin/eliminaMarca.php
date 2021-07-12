<?php
include_once ("../includes/body.inc.php");
$id=intval($_GET['id']);
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

 $sql = "delete from marcas where marcaId = ".$id;
 $sql2 = "delete from produtos where produtoMarcaId = ".$id;
 $sql3 = "delete imagens from imagens inner join produtos on imagemProdutoId = produtoId where produtoMarcaId = ".$id;

mysqli_query($con,$sql3);

mysqli_query($con, $sql2);
mysqli_query($con, $sql);
header("location: adminMarcas.php");

?>