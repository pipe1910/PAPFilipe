<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
$sql = "delete from marcas where marcaId = ".$id;

mysqli_query($con, $sql);
header("location:adminMarcas.php");
?>