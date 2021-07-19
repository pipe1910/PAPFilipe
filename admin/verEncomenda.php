<?php
include_once ("includes/body.inc.php");
top_2();

$id=intval($_GET['id']);

$sql="  select * from detalhes inner join produtos 
                on produtoId=detalheProdutoId
                where detalheEncomendaId=".$id;

$result=mysqli_query($con,$sql);


?>
    <div class="container">
        <h1>Detalhes da encomenda</h1>
        <a href="../admin/listaEstadoEncomenda.php"
        <button type="button" class="btn btn-light">Voltar</button></a>
        <table class="table table-striped table-hover">
            <tr>
                <th width="50%" class="text-center">Produto</th>
                <th width="30%" class="text-center" >Pre�o</th>
                <th width="20%" class="text-center">Quant.</th>
            </tr>
            <?php
            while($dados=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $dados['produtoNome']?></td>
                    <td class="text-center"><?php echo $dados['detalhePreco']?>&euro;</td>
                    <td class="text-center"><?php echo $dados['detalheQuantidade']?></td>
                </tr>
                <?php
            }
            ?>
        </table>

    </div>

<?php
Bot_2();
?>