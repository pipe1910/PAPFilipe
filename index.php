<?phpinclude_once("includes/body.inc.php");top();?><!-- Main --><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"><div id="main">    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">        <ol class="carousel-indicators">            <?php            $cont = 0;            $sql="Select * from slideshow";            $res=mysqli_query($con,$sql);            while($dados=mysqli_fetch_array($res)){                ?>                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $cont; ?>"                        class=" <?php if ($cont == 0) {                            echo " active ";                        } ?>"></li> <?php $cont++;            } ?> </ol>        <div class="carousel-inner">            <?php            mysqli_data_seek($res,0);            $cont = 0;            while($dados=mysqli_fetch_array($res)){            ?>                    <div class="carousel-item<?php if ($cont == 0) {                        echo " active ";                    } ?>"><img class="d-block w-100" src="<?php echo $dados['slideshowURL'] ?>" alt="First slide">                    </div> <?php $cont++;            } ?> </div>        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>        </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span                    class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>    </div>    <br>    <br>    <div class="inner">        <header id="inner">            <h1>Compre aqui o seu novo par de Sapatilhas!</h1>            <p></p>        </header>        <br>        <?php        $sql = "select * from marcas";        $resultMarcas = mysqli_query($con, $sql);        ?>        <section class="tiles">            <div class="row">                <?php                while ($dadosMarcas = mysqli_fetch_array($resultMarcas)) {                    ?>                    <article class="style2">									<span class="image">										<img src="<?php echo $dadosMarcas['marcaLogoURL'] ?>" alt=""/>									</span>                        <a href="Marca.php?id=<?php echo $dadosMarcas['marcaId'] ?>">                            <p><strong>Ver Mais</strong></p>                        </a>                    </article>                    <!-- <article class="style2">                        <span class="image">                            <img src="images/adidas.jpg" alt="" />                        </span>                        <a href="adidas.php">                            <p> <strong>Ver Mais</strong></p>                        </a>                    </article> -->                    <?php                }                ?>            </div>        </section>        <br>        <h2 class="h2">Críticas e FeedBacks</h2>        <div class="row">            <div class="col-sm-6 text-center">                <p class="m-n"><em>"Esta foi a primeira vez que mandei vir sapatilhas on-line e não tenho criticas a                        fazer, serviço impecável."</em></p>                <p><strong> - João Didlet</strong></p>            </div>            <div class="col-sm-6 text-center">                <p class="m-n"><em>"Não é a primeira vez que encomendo um par de sapatilhas online e, como sempre, não                        tenho reclamação nenhuma a fazer. Cumpridores com o prazo de entrega."</em></p>                <p><strong>- Pedro Teixeira da Mota</strong></p>            </div>        </div>        <p class="text-center"><a href="criticasEFeedBacks.php">Ver Mais &nbsp;<i                        class="fa fa-long-arrow-right"></i></a></p>        <br>    </div></div><?phpbot();?>