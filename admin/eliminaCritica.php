<?php
include_once("includes/body.inc.php");
$id = intval($_GET['id']);
echo $sql = "delete from criticas where criticaId = ".$id;

mysqli_query($con, $sql);

header("location:adminCriticasEFeedBacks.php");
?>