<?php
$id=intval($_GET['id']);
include_once("../includes/body.inc.php");

echo $sql="select * from imagens where imagemId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
if ($dados['imagemDestaque']=='sim'){
    $sqlnao="update imagens set imagemDestaque ='nao' where imagemId=".$id;
    mysqli_query($con, $sqlnao);
}else
    $sqlsim="update imagens set imagemDestaque ='sim' where imagemId=".$id;
mysqli_query($con, $sqlsim);

header("location:../admin/adminImagens.php");
?>