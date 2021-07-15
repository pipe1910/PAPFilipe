<?php
include_once("includes/body.inc.php");
top_2();
$id = intval($_GET['id']);
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$sql="Select * from criticas where criticaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<a href="../admin/admin.php"
<button type="button" class="btn btn-light">Voltar</button></a>
<script>
    function confirmaElimina(id) {
        if(confirm('Confirma que deseja eliminar a crítica?'))
            window.location="eliminaCrítica.php?id=" + id;
    }
</script>
    <td><a href="#" onclick="confirmaElimina(<?php echo $dados['criticaId']?>);"> <button type="button" class="btn btn-danger button1">Elimina</button></a></td>
<?php
bot_2();
?>