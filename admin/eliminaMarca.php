<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['id']);
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$sql= "delete from marcas inner join produtos on produtoMarcaId = marcaId where marcaId ='$id'";

mysqli_query($con,$sql);
header("location: adminMarcas.php");

?>