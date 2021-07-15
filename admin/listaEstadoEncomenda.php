<?php
include_once("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$con->set_charset("utf8");
$sql="Select * from encomendas inner join perfis on encomendaPerfilId=perfilId ";
$result=mysqli_query($con,$sql);

top_2();
?>



    <div class="container">
        <h1>Estado das encomendas</h1>

        <table class='table table-striped' width="100%">
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Data</th>
                <th>Estado</th>
                <th colspan="2">opções</th>
            </tr>
            <a href="../admin/admin.php"
            <button type="button" class="btn btn-light">Voltar</button></a>
            <?php
            while($dados=mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $dados['encomendaId']?></td>
                    <td><?php echo $dados['perfilNome']?></td>
                    <td>
                        <?php
                        $sql="Select * from detalhes inner join produtos on produtoId=detalheProdutoId 
                                                     inner join encomendas where detalheEncomendaId = encomendaId";
                        $sql.=" where detalheEncomendaId=".$dados['encomendaId'];
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
                        if($dados['encomendaEstado']=='preparacao'){
                            ?>
                            <a class='btn btn-warning btn-xs' href="caminhoEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <i class='fa fa-pencil'></i>Despachar</a>

                            <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <i class='fa fa-pencil'></i>Detalhes</a>
                            <?php
                        }
                        if($dados['encomendaEstado']=='caminho'){
                            ?>
                            <a class='btn btn-success btn-xs' href="entregaEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <i class='fa fa-pencil'></i>Entregar</a>

                            <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <i class='fa fa-pencil'></i>Detalhes</a>
                            <?php
                        }
                        if($dados['encomendaEstado']=='entregue'){
                            ?>
                            <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                                <i class='fa fa-pencil'></i>Detalhes</a>
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