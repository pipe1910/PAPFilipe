function adicionaCarrinho(id){
    alert("O seu produto foi adicionado ao carrinho com sucesso!");
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
function confirmaEliminaCarrinho(idProduto) {
    var nomeProduto;
    $.ajax({
        url:"admin/AJAX/AJAXGetNameProduto.php",
        type:"post",
        data:{
            idProduto:idProduto
        },
        success:function (result){
            nomeProduto=result;
            if(confirm('Confirma que deseja eliminar o produto:'+nomeProduto+'?')){
                $.ajax({
                    url:"admin/AJAX/AJAXEliminaProdutoCarrinho.php",
                    type:"post",
                    data: {
                        idPrd:idProduto
                    },
                });
            }
        }
    });
}

function atualizaCarrinho(valor,idProduto){
    if(valor>0){
        $.ajax({
            url:"admin/AJAX/AJAXAtualizaProdutoCarrinho.php",
            type:"post",
            data:{
                idPrd:idProduto,
                quant:valor
            },
            success:function (result){
                location.reload();
            }
        });
    }


}

function mostrarDetalhes(){
    $('#detalhes').toggle();
}



