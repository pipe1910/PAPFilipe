<?php

print_r($_FILES['arquivo']);

$nomedoArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo =  $_FILES['arquivo']['tmp_name'];
$caminhoSalvar = '../slideshow/'.$nomedoArquivo;

;

if (move_uploaded_file($caminhoAtualArquivo,$caminhoSalvar)) {

    header("location: adminSlideShow.php");
}else{
?>
    <script>
        alert("Nenhum ficheiro selecionado!");

    </script>

   <?php

}


?>











