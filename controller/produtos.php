
<?php 

$smarty = new Template();

$produtos = new Produtos();

//tras os protudos com base no numero do array de acordo com o codigo primario do banco na parte de categorias ai como o array sempre inicia 
//com 0 assim q ele for verificar ja vai estar como 1,
//isset verifica se existe

if(isset(Rotas::$pag[1])){
	$produtos->GetProdutosCateID(Rotas::$pag[1]);
}else{
	$produtos->GetProdutos();
}




$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
//chama o metodo q faz a paginação com a configuração de paginas
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());

$smarty->display('produtos.tpl');

//e mais debug esse e dos produtos
//echo'<pre>';
//ar_dump($produtos->GetItens());
//echo'</pre>';

 ?>

