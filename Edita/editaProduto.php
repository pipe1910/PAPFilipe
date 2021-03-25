<?php
include_once("../includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from produtos where produtoId=$id";
$resultProdutos=mysqli_query($con,$sql);
$dadosProdutos=mysqli_fetch_array($resultProdutos);

?>
<h1>Editar produto</h1>
<form action="../Confirma/confirmaEditaProduto.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="produtoId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="produtoNome" value="<?php echo $dadosProdutos['produtoNome']?>"><br>
    <label>Preco:</label><br>
    <input type="text" name="produtoPreco" value="<?php echo $dadosProdutos['produtoPreco']?>"><br>

    <select name="marcaNome">
        <option value="-1">Escolha a marca...</option>
        <?php
        $sql="select * from marcas order by marcaNome";
        $resultMarcas=mysqli_query($con,$sql);
        while ($dadosMarcas=mysqli_fetch_array($resultMarcas)){
            ?>
            <option value="<?php echo $dadosMarcas['marcaId']?>"
                <?php
                if($dadosProdutos['produtoMarcaId']==$dadosMarcas['produtoId'])
                    echo " selected ";
                ?>
            >
                <?php echo $dadosMarcas['produtoNome']?>
            </option>
            <?php
        }


        ?>
    </select>

    <input type="Submit" value="Edita"><br>


