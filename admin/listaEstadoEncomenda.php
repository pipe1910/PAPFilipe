<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021sneakerstore");
$con->set_charset("utf8");
$sql="Select * from encomendas inner join perfis on perfilId=encomendaPerfilId ";
$result=mysqli_query($con,$sql);

top_2();
?>


    <div class="container">
        <h1>Estado das encomendas</h1>
        <a href="../admin/admin.php"
        <button type="button" class="btn btn-light">Voltar</button></a>

        <table class='table table-striped' width="100%">
            <tr>
                <th>Id</th>
                <th> Cliente</th>
                <th> Produto</th>
                <th>Data</th>
                <th>Estado</th>
                <th colspan="2">opções</th>
            </tr>
            <?php
            while($dados=mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $dados['encomendaId']?></td>
                    <td><?php echo $dados['perfilNome']?></td>
                    <td>
                        <?php
                        $sql="Select * from detalhes inner join produtos on produtoId=detalheProdutoId ";
                        $sql.="where detalheEncomendaId=".$dados['encomendaId'];
                        $resultPrd=mysqli_query($con,$sql);
                        while($dadosPrd=mysqli_fetch_array($resultPrd)) {
                            echo '<li>' . $dadosPrd['produtoNome'] . '</li>';
                        }
                        ?>
                    </td>
                    <td><?php echo $dados['encomendaData']?></td>
                    <td><?php echo $dados['encomendaEstado']?></td>
                    <td>
                        <?php
                        if($dados['encomendaEstado']=='pendente'){
                            ?>
                            <a href="caminhoEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <button type="button" class=" btn-info">Despachar</button></a>

                            <a href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <button type="button" class=" btn-danger">Detalhes</button></a>
                            <?php
                        }
                        if($dados['encomendaEstado']=='expedida'){
                            ?>
                            <a href="entregaEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <button type="button" class=" btn-info">Entregue</button></a>

                            <a href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <button type="button" class=" btn-danger">Detalhes</button></a>
                            <?php
                        }
                        if($dados['encomendaEstado']=='entregue'){
                            ?>
                            <a href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <button type="button" class=" btn-danger">Detalhes</button></a>
                            <?php
                        }
                        ?>

                    </td>
                </tr>
                <?php
            }
            ?>


        </table>



    </div>

<?php
Bot_2();
?>