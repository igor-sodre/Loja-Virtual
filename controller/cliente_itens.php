<?php 

$smarty = new Template();

Login::MenuCliente();

//caso de um erro no POST do codigo do pedido vai re direcionar a pagina
if(!isset($_POST['cod_pedido'])){
	Rotas::Redirecionar(1, Rotas::pag_ClientePedidos());
	exit();
}
//chama a classe de itens
$itens = new Itens();
$pedido = filter_var($_POST['cod_pedido'], FILTER_SANITIZE_STRING);

$itens->GetItensPedido($pedido);
$smarty->assign('ITENS', $itens->GetItens());
$smarty->assign('TOTAL', $itens->GetTotal());


$smarty->display('cliente_itens.tpl');

 ?>