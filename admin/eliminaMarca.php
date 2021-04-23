<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
$sql2 = "delete from produtos where produtoMarcaId = ".$id;
$sql3 = "delete from imagens where iamgemProdutoId = ".$id;
$sql = "delete from marcas where marcaId = ".$id;


mysqli_query($con, $sql3);
mysqli_query($con, $sql2);
mysqli_query($con, $sql);


header("location:adminMarcas.php");
?>