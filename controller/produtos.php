
<h2>esta e a pagina produtos</h2>


<?php 

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();


//$smarty->assign('PRO', $produtos->GetItens());
//$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
var_dump($produtos->GetItens());


$smarty->display('produtos.tpl');



 ?>