<?php
include_once("../includes/body.inc.php");
top_2();

$con=mysqli_connect("localhost","root","","pap2021sneakerstore");
$id=intval($_GET["id"]);
$sql="select * from produtos inner join marcas on produtoMarcaId=marcaId  where produtoMarcaId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

    <!-- Main -->

    <div id="main">

        <div class="inner">


            <div class="container-fluid">

                <div class="row">
                    <?php
                   $sql2="select * from imagens inner join produtos on imagemProdutoId = produtoId where imagemDestaque = 'sim'";
                   $result2= mysqli_query($con,$sql2);
                    while ($dados2=mysqli_fetch_array($result2)){
                        ?>

                        <div class="col-lg-4">


                            <a href="../Produtos/ListaProduto.php?id=<?php echo $dados["produtoId"] ?>">
                                <img class="d-block w-100" src="../<?php echo $dados2["imagemURL"]?>">
                            </a>
                            <h3><?php echo $dados["produtoNome"]?><span class="pull-right"></span></h3>

                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
        </div>

        <br>

    </div>

<?php
bot();
?>

