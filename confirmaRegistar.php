<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$nome=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$password=md5(addslashes($_POST['password']));
$telefone=addslashes($_POST['telemovel']);
$morada=addslashes($_POST['morada']);
$login=addslashes($_POST['login']);
$sql="insert into users(userLogin,userPassword) values('".$nome."','".$password."')";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con);
$sql="insert into perfis(perfilId,perfilNome,perfilMorada,perfilEmail,perfilTelefone) ";
$sql.=" values(".$lastId.",'".$nome."','".$morada."','".$email."','".$telefone."')";
echo $sql;
mysqli_query($con,$sql);
header("location:index.php");

?>