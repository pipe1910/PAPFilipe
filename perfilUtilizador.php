<?php
include_once("includes/body.inc.php");
top_2();
?>

    <div id="main" class="alt">

        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <?php if(isset($_SESSION['id'])){ ?>

                     <h1> Conta - <?php echo  $_SESSION['nome']?> </h1></a>
                         <a href="index.php"
                        <button type="button" class="btn btn-light">Voltar</button></a>
                    <?php }else{ ?>

                        <h1> Conta </h1>
                    <?php }?>

                </header>



                <table class='table table-striped table-hover' width="70%">
                    <h3>Historico das encomendas</h3>
                    <tr>

                        <th width="30%" class="text-center" >Data de Realização</th>
                        <th width="20%" class="text-center">Estado</th>
                        <th width="20%" class="text-center">Detalhes</th>
                    </tr>
                    <?php
                    $sql="  select *
                        from encomendas
                        where encomendaPerfilId=".$_SESSION['id'];
                    $res=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($res)){
                        ?>


                        <tr>
                            <td class="text-center"><?php echo $dados['encomendaData']?></td>
                            <td class="text-center"><?php echo $dados['encomendaEstado']?></td>
                            <td class="text-center"><button class="btn btn-sm" onclick="mostrarDetalhes()">ver Detalhes</button></td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                <div id="detalhes" style="display: none">
                                    <table class="table table-striped table-hover" style="color: #000">
                                        <tr>
                                            <th width="50%" class="text-center">Produto</th>
                                            <th width="30%" class="text-center" >Preço</th>
                                            <th width="20%" class="text-center">Quant.</th>
                                        </tr>
                                        <?php
                                        $sql="  select *
                                    from detalhes inner join produtos 
                                        on produtoId=detalheProdutoId
                                    where DetalheEncomendaId=".$dados['encomendaId'];

                                        $resDetalhe=mysqli_query($con,$sql);
                                        while($dadosDetalhe=mysqli_fetch_array($resDetalhe)){
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $dadosDetalhe['produtoNome']?></td>
                                                <td class="text-center"><?php echo $dadosDetalhe['detalhePreco']?>&euro;</td>
                                                <td class="text-center"><?php echo $dadosDetalhe['detalheQuantidade']?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>

                            </td>
                        </tr>

                        <?php
                    }
                    ?>



                </table>
        </section>

    </div>

<?php
Bot_2();
?>