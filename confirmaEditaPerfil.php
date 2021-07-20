<?php
include_once("includes/body.inc.php");
$nome=addslashes($_POST['nomePerfil']);
$morada=addslashes($_POST['Morada']);
$email=addslashes($_POST['Email']);
$telemovel=addslashes($_POST['Telemovel']);
 $sql="UPDATE perfis SET perfilNome='".$nome."', perfilMorada='".$morada."', perfilEmail='".$email."', perfilTelefone='".$telemovel."'";
echo $sql.=" where perfilId=" . $_SESSION['id'];

mysqli_query($con,$sql);
header("location:perfilUtilizador.php");
?>