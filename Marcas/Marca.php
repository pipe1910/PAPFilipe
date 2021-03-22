<?php
include_once("../includes/body.inc.php");
top();

$con=mysqli_connect("localhost","root","","pap2021sneakerstore");
$id=intval($_GET["id"]);
$sql="select * from produtos inner join imagens on produtoId=imagemProdutoId  inner join marcas on produtoMarcaId=marcaId  where produtoMarcaId=".$id;
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE HTML>

<html>

<head>

    <title>PHPJabbers.com | Free Car Dealer Website Template - teste</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/main.css" />

    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>

</head>

<body class="is-preload">

<!-- Wrapper -->

<div id="wrapper">



    <!-- Header -->

    <header id="header">

        <div class="inner">

    </header>

    <!-- Main -->

    <div id="main">

        <div class="inner">


            <div class="container-fluid">

                <div class="row">
                    <?php
                    while ($dados=mysqli_fetch_array($result)){
                        ?>

                        <div class="col-lg-4">


                            <a href="../Produtos/ListaProduto.php?id=<?php echo $dados["produtoId"] ?>">
                                <img class="d-block w-100" src="../images/<?php echo $dados["imagemURL"]?>">
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

</div>

</div>



<!-- Scripts -->

<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/jquery.scrolly.min.js"></script>

<script src="../assets/js/jquery.scrollex.min.js"></script>

<script src="../assets/js/main.js"></script>



</body>

</html>
<?php
bot();
?>

