<?php

if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
}else{




if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

	
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());
//debug da parte do banco de salvar os pedidos
//como não tem cliente ta ai um temporario
	$pedido = new Pedidos();
	$cliente = 1;
	$cod = $_SESSION['pedido'];
	$ref = '054451ref';

	if($pedido->PedidoGravar($cliente, $cod, $ref)){
		$pedido->LimparSessoes();
	}


	$smarty->display('pedido_finalizar.tpl');

}else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
}
 ?>