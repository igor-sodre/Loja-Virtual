<?php 

$smarty = new Template();

Login::MenuCliente();

$pedidos = new Pedidos();
//inicia a seçao do cliente e faz com q nossa variavel retorne apenas os produtos do cliente logado
$pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

$smarty->assign('PEDIDOS', $pedidos->GetItens());
$smarty->assign('PAG_ITENS', Rotas::pag_ClienteItens());


$smarty->display('clentes_pedidos.tpl');

 ?>