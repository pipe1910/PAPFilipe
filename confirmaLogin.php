<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$nome=addslashes($_POST['nome']);
$password=md5(addslashes($_POST['password']));
$sql="select userId from users where userState='ativo' and userLogin ='$nome'";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

if(!isset($dados['userId'])){ // não existe o login
   header("location:login.php?erro");
}
else{
    $sql="select userId, userPassword, userLogin from users where userId =".$dados['userId'];
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    $sistemaLogin=$dados['userLogin'];
    $sistemaPass=$dados['userPassword'];

    if($dados['userPassword']==$sistemaPass && $dados['userLogin']==$sistemaLogin){
        $sql="select perfilNome from perfis where perfilId =".$dados['userId'];
        $result=mysqli_query($con,$sql);
        $dadosP=mysqli_fetch_array($result);
        session_start();
        $_SESSION['id'] = $dados['userId'];
        $_SESSION['nome'] = $dadosP['perfilNome'];
        header("location:index.php");
    }
    else{
        header("location:login.php?erro");
    }


}
?>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>