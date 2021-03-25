<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
 echo $sql = "delete from produtos where produtoId =".$id;

mysqli_query($con, $sql);
header("location:../admin/adminProdutos.php");
?>