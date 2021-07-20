<?php
include_once("includes/body.inc.php");
top_2();
$sql = "select * from perfis where perfilId=" .$_SESSION['id'];
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result)
?>
<!-- Page Content -->
<div class="page-heading header-text">
    <div class="container">
        <div class="w-cards__icon">
            <div class="w-cards__icon_wrapper">
                <div class="header-right">
                    <h1><?php echo $dados['perfilNome'] ?></h1>
                </div>
            </div>
        </div>
    </div>
</div> <!-- fim do container -->

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Editar<em> Perfil</em></h2>
                </div>
                <form action="confirmaEditaPerfil.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomePerfil">Nome: </label>
                        <input type="text" class="form-control" id="nomePerfil" name="nomePerfil" value="<?php echo $dados['perfilNome']?>">
                    </div><br>
                    <div class="form-group">
                        <label for="Morada">Morada: </label>
                        <input type="text" class="form-control" id="Morada" name="Morada" value="<?php echo $dados['perfilMorada']?>">
                    </div><br>
                    <br>
                    <div class="form-group">
                        <label for="Email">Email: </label>
                        <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $dados['perfilEmail']?>">
                    </div><br>
                    <br>
                    <div class="form-group">
                        <label for="Telemovel">Telemovel: </label>
                        <input type="text" class="form-control" id="Telemovel" name="Telemovel" value="<?php echo $dados['perfilTelefone']?>">
                    </div><br>
                    <br>
                    <button type="submit" class="btn bg-transparent">Confirma alterações</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="services">
    <div class="container">

    </div>
</div>
<!-- Footer Starts Here -->


<?php
bot();
?>
</body>
</html>