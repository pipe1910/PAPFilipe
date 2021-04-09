<?phpinclude_once("includes/body.inc.php");top();?>				<!-- Main --><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">					<div id="main">						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">						  <ol class="carousel-indicators">						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>						  </ol>						  <div class="carousel-inner">						    <div class="carousel-item active">						      <img class="d-block w-100" src="images/sean971.png" alt="First slide">						    </div>						    <div class="carousel-item">						      <img class="d-block w-100" src="images/oreo.jpg" alt="Second slide">						    </div>						    <div class="carousel-item">						      <img class="d-block w-100" src="images/curry.jpg" alt="Third slide">						    </div>						  </div>						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>						    <span class="sr-only">Previous</span>						  </a>						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">						    <span class="carousel-control-next-icon" aria-hidden="true"></span>						    <span class="sr-only">Next</span>						  </a>						</div>						<br>						<br>						<div class="inner">							<header id="inner">								<h1>Compre aqui o seu novo par de Sapatilhas!</h1>								<p></p>							</header>								<!-- LOGIN -->							<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">								<div class="modal-dialog">									<div class="modal-content">										<div class="modal-header">											<h5 class="modal-title" id="exampleModalLabel">Login</h5>											<button type="button" class="close" data-dismiss="modal" aria-label="Close">												<span aria-hidden="true">&times;</span>											</button>										</div>										<div class="modal-body">											<form>												<div class="form-group">													<label for="InputEmail">E-mail:</label>													<input type="email" class="form-control" id="InputEmail">												</div>												<div class="form-group">													<label for="exampleInputPassword1">Palavra-passe:</label>													<input type="password" class="form-control" id="exampleInputPassword1">												</div>												<div class="form-group form-check">													<input type="checkbox" class="form-check-input" id="exampleCheck1">													<label class="form-check-label" for="exampleCheck1">Manter-me logado</label>												</div>												<h8>Ainda não tem conta?</h8>												<a href="#" onclick="fecha()" data-toggle="modal" data-target="#regista"><button type="submit" class="btn btn-outline-light">Registar</button></a>											</form>										</div>										<div class="modal-footer">											<button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>											<button type="submit" class="btn btn-light">Submeter</button>										</div>									</div>								</div>							</div>							<!--End Login -->							<!-- ======= REGISTAR======= -->							<div class="modal fade" id="regista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">								<div class="modal-dialog">									<div class="modal-content">										<div class="modal-header">											<h5 class="modal-title" id="exampleModalLabel">Registar</h5>											<button type="button" class="close" data-dismiss="modal" aria-label="Close">												<span aria-hidden="true">&times;</span>											</button>										</div>										<div class="modal-body">											<form>												<div class="form-group">													<label for="InputName">Nome:</label>													<input type="name" class="form-control" id="InputName" aria-describedby="emailHelp">												</div>												<div class="form-group">													<label for="InputEmail">E-mail:</label>													<input type="email" class="form-control" id="InputEmail">												</div>												<div class="form-group">													<label for="InputPassword1">Palavra-passe</label>													<input type="password" class="form-control" id="InputPassword1">												</div>												<div class="form-group form-check">													<input type="checkbox" class="form-check-input" id="exampleCheck1">												</div>											</form>										</div>										<div class="modal-footer">											<button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>											<button type="submit" class="btn btn-light">Submeter</button>										</div>									</div>								</div>							</div>							<!--End Registar -->							<br>                            <?php                            $sql="select * from marcas";                            $resultMarcas = mysqli_query($con, $sql);                            ?>							<section class="tiles"><div class="row">    <?php    while ($dadosMarcas = mysqli_fetch_array($resultMarcas)) {    ?>							<article class="style2">									<span class="image">										<img src="<?php echo $dadosMarcas['marcaLogoURL']?>" alt="" />									</span>						<a href="Marca.php?id=<?php echo $dadosMarcas['marcaId']?>">						<p> <strong>Ver Mais</strong></p>						</a>					</article>								<!-- <article class="style2">									<span class="image">										<img src="images/adidas.jpg" alt="" />									</span>									<a href="adidas.php">										<p> <strong>Ver Mais</strong></p>									</a>								</article> -->    <?php    }    ?></div>							</section>							<br>							<h2 class="h2">Críticas e FeedBacks</h2>														<div class="row">								<div class="col-sm-6 text-center">									<p class="m-n"><em>"Esta foi a primeira vez que mandei vir sapatilhas on-line e não tenho criticas a fazer, serviço impecável."</em></p>									<p><strong> - João Didlet</strong></p>								</div>								<div class="col-sm-6 text-center">									<p class="m-n"><em>"Não  é a primeira vez que encomendo um par de sapatilhas online e, como sempre, não tenho reclamação nenhuma a fazer. Cumpridores com o prazo de entrega."</em></p>									<p><strong>- Pedro Teixeira da Mota</strong> </p>								</div>							</div>							<p class="text-center"><a href="html/CriticasEFeedBacks.html">Ver Mais &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>							<br>						</div>					</div><?phpbot();?>