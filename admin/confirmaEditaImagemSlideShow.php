<?php
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$id=intval($_POST['imagemId']);
$imagem=$_FILES['imagem']['name'];
$novoNome="../images/".$imagem;

$sql="Update slideshow set ";
if($imagem!=''){
    $sql.="slideshowURL='images/".$imagem."'";
    copy($_FILES['imagem']['tmp_name'],$novoNome);
}

$sql.=" where slideshowId=".$id;
echo $sql;
mysqli_query($con,$sql);
header("location:../admin/adminSlideShow.php");