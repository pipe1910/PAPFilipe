<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idCritica']);
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from criticas where criticaId=$id";

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['criticaTexto'];
?>