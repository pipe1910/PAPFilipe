<?php
include_once("includes/body.inc.php");
top_2();


?>








<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>
<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar a imagem?'))
            window.location="eliminaSlideshow.php?id=" + id;
    }
</script>

<table class='table table-striped'  style="width: 100%; margin-bottom: 200px; border: 2px black;">
    <tr>
        <td colspan="8" align='right'>
            <a href="Slideshow.php"><button type="button" class="btn btn-success button1">Adicionar imagem ao Slideshow</button></a>
        </td>
    </tr>
    <tr>

        <th>Imagem</th>

        <th colspan="2" class="align-center">op&ccedil&otildees</th>
    </tr>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $dir = "../slideshow";
            $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) {
                    ?>
                    <li data-target="#carouselExampleIndicators"
                        data-slide-to="<?php echo $cont; ?>" class="
                      <?php if ($cont == 0) {
                        echo " active ";
                    } ?>"></li>
                    <?php
                    $cont++;
                }

            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) {
                    ?>
                    <div class="carousel-item"


                    } ?>">
                        <?php

                        ?>
                        <td> <img width='90' src="<?php echo $dir . "/" . $value ?>"></td>

                    </div>
                    <?php
                    $cont++;
                }
            }
            ?>
        </div>



































    <?php
    while($cont == 0){
        ?>
        <tr>

            src="<?php echo $dir . "/" . $value ?>" alt="First slide">


            <td><a href="../admin/adminImagens.php?id=<?php echo $dados['produtoId']?>"><button type="button" class="btn btn-secondary button1">Imagens</button></a></td>
            <td><a href="editaProduto.php?id=<?php echo $dados['produtoId']?>"><button type="button" class="btn btn-info button1">Edita</button></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['produtoId']?>);"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td>

        </tr>
        <?php
    }
    ?>
</table>

<?php

bot_2();
?>

