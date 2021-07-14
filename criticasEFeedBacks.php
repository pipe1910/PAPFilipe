<?php
include_once("includes/body.inc.php");
top();
$con = mysqli_connect("localhost", "root", "", "pap2021sneakerstore");
$sql = "select * from criticas inner join perfis on criticaPerfilId=perfilId";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE HTML>

<html>

	<head>

		<title>PHPJabbers.com | Free Car Dealer Website Template</title>

		<meta charset="utf-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

		<link rel="stylesheet" href="assets/css/main.css" />

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>

	<body class="is-preload">

		<!-- Wrapper -->

			<div id="wrapper">

				<!-- Main -->

					<div id="main" >

						<div class="inner">

							<div class="image main ">

								<img src="images/wallpaper.png" class="img-fluid" alt="" />

							</div>


                            <h2 class="h2">Críticas e FeedBacks</h2>
                            <div class="row">
<?php
while ($dados=mysqli_fetch_array($result)){
?>

                            <div class="col-sm-6 text-center">

                                <p class="m-n"><em><?php echo $dados['criticaTexto']?></em></p>



                                <p><strong><?php echo $dados['perfilNome']?></strong></p>

                            </div>

                            <?php
                            }
                            if(isset($_SESSION['id'])){
?>
                            </div>
                            <section>

                                <h2>Deixe aqui a sua crítica</h2>

                                <form method="post" action="novaCritica.php">

                                    <div class="fields">



                                        <div class="field">

                                            <textarea name="critica"></textarea>

                                        </div>


                                        <div class="field text-right">

                                            <label>&nbsp;</label>



                                            <ul class="actions" style="width: 290px; height: 70px">

                                                <li><input type="submit" value="Enviar crítica" class="primary" style="height: 80px; text-align: center;" /></li>
                                            </ul>

                                        </div>

                                    </div>

                                </form>

                            </section>
                                <?php
                            }
?>
                    </div>
                    </div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>

			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

			<script src="assets/js/jquery.scrolly.min.js"></script>

			<script src="assets/js/jquery.scrollex.min.js"></script>

			<script src="assets/js/main.js"></script>

	</body>

</html>
<?php
bot();
?>

