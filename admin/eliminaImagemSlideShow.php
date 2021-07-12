<?php

$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$id = intval($_GET['id']);
$sql = "delete from slideshow where slideshowId = '$id'";
mysqli_query($con, $sql);
header("location:adminSlideShow.php");
?>