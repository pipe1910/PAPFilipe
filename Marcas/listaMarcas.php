<?php
include_once("../includes/body2.inc.php");
top();
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$id= intval($_GET["id"]);
$sql="select * from produtos inner join marcas on produtoMarcaId=marcaId inner join imagens on produtoId=imagemProdutoId where marcaId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

<div class="col-lg-4">

    <img class="d-block w-100" src="../images/<?php echo $dados['imagemURL']?>">
    <h3><?php echo $dados['produtoNome']?> <span class="pull-right"></span></h3>
</div>
<?php
bot();
?>


