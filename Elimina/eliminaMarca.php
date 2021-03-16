<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
 echo $sql = "delete from marcas where marcaId = '$id'";

mysqli_query($con, $sql);
header("location:../papFilipe/adminMarcas.php");
?>