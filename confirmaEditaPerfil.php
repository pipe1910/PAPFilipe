<?php
include_once ("includes/body.inc.php");
session_start();
$nome=addslashes($_POST['nomePerfil']);
$morada=addslashes($_POST['Morada']);
$telemovel=addslashes($_POST['Telemovel']);
echo $sql="UPDATE perfis SET perfilNome='".$nome."', perfilMorada='".$morada."', perfilTelefone='".$telemovel."',";
echo $sql.=" where perfilId=" . $_SESSION['id'];

mysqli_query($con,$sql);
header("location:perfilUtilizador.php");
?>