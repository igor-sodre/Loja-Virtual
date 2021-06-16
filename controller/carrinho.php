<?php
//debug de seçao de pedido
//echo $_SESSION['pedido'];
if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());



	$smarty->display('carrinho.tpl');

}else{//se não tem produtos no carrinho vai mostar essa mensagem e mandar ele pra pagina de produtos
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}
//mais debug do carrinho 
/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>