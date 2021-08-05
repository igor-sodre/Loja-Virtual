<?php
//bloqueia o finalizar compra caso não tenha selecionado um frete
if(isset($_SESSION['PRO'])) {

	$smarty = new Template();
	
	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
	$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
	$smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
	$smarty->assign('PAG_FINALIZAR_SOLI', Rotas::pag_PedidoFinalizarSolicitacao());


	$smarty->display('pedido_solicitar.tpl');

}else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>