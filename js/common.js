function adicionaCarrinho(id){
    alert("O seu produto foi adicionado aol carrinho com sucesso!");
    $.ajax({
        url:"admin/AJAX/AJAXNovoProdutoCarrinho.php",
        type:"post",
        data: {
            idPrd:id
        },
        success:function(result){
        }
    });
}



