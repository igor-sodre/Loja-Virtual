<?php

if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}else{
	if(isset($_SESSION['PRO'])) {


	if(!isset($_SESSION['PED']['frete'])){
		Rotas::Redirecionar(1, Rotas::pag_Carrinho().'#dadosfrete');
		exit ('<h4 class="alert alert-danger"> Precisa selecionar o frete! </h4>');
	}	



	$smarty = new Template();

	$carrinho = new Carrinho();


		$ref_cod_pedido = date('ymdHms') . $_SESSION['CLI']['cli_id'];

		if(!isset($_SESSION['PED']['pedido'])){
			$_SESSION['PED']['pedido'] = $ref_cod_pedido;
		}

		if(!isset($_SESSION['PED']['ref'])){
			$_SESSION['PED']['ref'] = $ref_cod_pedido;
		}

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
	$smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
	$smarty->assign('SITE_NOME', Config::SITE_NOME);
	$smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_MINHA_CONTA', Rotas::pag_CLientePedidos());
	
	$smarty->assign('TEMA', Rotas::get_SiteTEMA());

	$smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
	$smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));


	$pedido = new Pedidos();
	//sessao de cliente
	$cliente = $_SESSION['CLI']['cli_id'];
	$cod = $_SESSION['PED']['pedido'];
	$ref = $_SESSION['PED']['ref'];
	$frete = $_SESSION['PED']['frete'];




	$email = new EnviarEmail();

	$destinatarios = array(Config::SITE_EMAIL_ADM, $_SESSION['CLI']['cli_email']);
	$assunto = 'Pedido da Loja Freitas - ' . Sistema::DataAtualBR();
	$msg = $smarty->fetch('email_compra.tpl');

	$email->Enviar($assunto, $msg, $destinatarios);

	if($pedido->PedidoGravar($cliente, $cod, $ref, $frete)){
		$pedido->LimparSessoes();
	}


	$smarty->display('pedido_finalizar.tpl');


}else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pag_Produtos());
}

}



/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>