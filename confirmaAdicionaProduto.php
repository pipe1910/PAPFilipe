<?php
include_once ("includes/body.inc.php");


$prodnome=addslashes($_POST['produtoNome']);
$prodpreco=addslashes($_POST['produtoPreco']);
$produtoid=addslashes($_GET['produtoId']);
$produtomarcaId=intval($_POST['produtoMarcaId']);
$imagem=$_FILES['imagemURL']['name'];
$novoNome="images/".$imagem;

copy($_FILES['produtoNome']['tmp_name'],$novoNome);

echo $sql="insert into produtos(produtoNome,produtoPreco,produtoMarcaId) 
values('".$prodnome."','images/".$imagem."',".$produtoid.");";
mysqli_query($con,$sql);
header("location:adicionaproduto.php");
?>
