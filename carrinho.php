<?phpinclude_once("includes/body.inc.php");top_2();$lista="(0";if(isset($_SESSION['carrinho'])){    foreach ($_SESSION['carrinho'] as $produto){        $lista.=",".$produto;    }}$lista.=")";$sql="select * from produtos inner join imagens on produtoId = imagemProdutoId                where produtoId in $lista and imagemDestaque='sim'";$result=mysqli_query($con,$sql);?><!DOCTYPE HTML><html>	<body class="is-preload">				<table class='table table-striped table-hover' width="70%">					<tr>						<th width="3%">#</th>						<th width="50%">Nome</th>						<th width="22%">Imagem</th>                        <th >Quant. </th>						<th width="7%">Preço</th>						<th width="5%">Opções</th>					</tr>                    <?php                    $i=1;                    while ($dados=mysqli_fetch_array($result)){                        ?>                        <tr>                            <th width="3%"><?php echo $i++?></th>                            <th width="50%"><?php echo $dados['produtoNome']?></th>                            <th width="22%"><img width="80" src="<?php echo $dados['imagemURL']?>"</th>                            <td><p style="color: #000000!important;"><input type="number" value="1" min="1" style="width: 50px; text-align: center"></p></td></td>                            <th ><?php echo $dados['produtoPreco']?></th>                            <th><i class="fas fa-trash"></i>                            </th>                        </tr>                            <?php                    }                    ?>                </table>    </body></html><?phpbot();?>