<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
$sql="select idslideshow from slideshow";
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);

 echo $sql = "delete from slideshow where idslideshow = '$id'";

mysqli_query($con, $sql);
header("location:adminSlideShow.php?id=".$dados['URLSlideShow']);
?>