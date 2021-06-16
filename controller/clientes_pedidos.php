<?php

$smaty= new Template();

Login::MenuCliente();
$pedidos = new Pedidos();

$pedidos->GetPedidosCliente();


$smarty->display('clientes_pedidos.tpl');



?>