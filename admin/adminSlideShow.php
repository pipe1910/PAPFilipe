<?php
include_once("includes/body.inc.php");
top_2();


$sql ="Select * from slideshow";
$result=mysqli_query($con, $sql);
?>

<section>
    <div class="container">


    </div>

    <div id="tableContent">
        <table class='table table-striped' width="100%">
            <tr>
                <a href="../admin/admin.php"
                <button type="button" class="btn btn-light">Voltar</button></a>
                <td colspan="4"  align='right' style="right: auto">

                   <a href="adicionaImagemSlideShow.php"> <button type="button" class="btn btn-success button1">Adicionar Imagem</button></a>
                </td>
            </tr>
            <tr>
                <th width="40%">Imagem</th>
                <th width="40%">Id</th>
                <th colspan="2" style="text-align: center">Opções</th>
            </tr>

            <?php
            while($dados=mysqli_fetch_array($result)){// enquanto existirem registos no result
                ?>
                <tr>
                    <td><img width="120" src="../<?php echo $dados['slideshowURL']?>"></td>
                    <td><?php echo $dados['slideshowId']?></td>
                    <td align="center"><a href="editaImagemSlideShow.php?id=<?php echo $dados['slideshowId']?>"> <button type="button" class="btn btn-info button1">Edita</button></a></td> </a></td>
                    <td align="center"><a onclick="confirmaElimina(<?php echo $dados['slideshowId'] ?>)"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</section>
<script>
    function confirmaElimina(id){
        if (confirm('Tem a certeza que quer eliminar esta imagem?')) {
            window.location.href ="eliminaImagemSlideShow.php?id="+id;
        }
    }
</script>
<?php
bot_2();
?>
