<? phpinclude_once("includes/body.inc.php");
top(); ?> <!-- Main -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
      integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<div id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators"> <?php $dir = "slideshow";
            $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $cont; ?>"
                        class=" <?php if ($cont == 0) {
                            echo " active ";
                        } ?>"></li> <?php $cont++;
                }
            } ?> </ol>
        <div class="carousel-inner"> <?php $cdir = scandir($dir);
            $cont = 0;
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", ".."))) { ?>
                    <div class="carousel-item<?php if ($cont == 0) {
                        echo " active ";
                    } ?>"><img class="d-block w-100" src="<?php echo $dir . "/" . $value ?>" alt="First slide">
                    </div> <?php $cont++;
                }
            } ?> </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
        </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
    <br> <br>