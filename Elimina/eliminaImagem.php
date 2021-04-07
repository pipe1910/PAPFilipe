<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);

 echo $sql = "delete from imagens where imagemId = '$id'";

mysqli_query($con, $sql);
header("location:../admin/adminImagens.php?id={$id}");
?>