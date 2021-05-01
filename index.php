<?php
   //esse require busca a biblioteca do composer //
  require './lib/autoload.php';

//realiza associaçaoes para o template//
$smarty = new Template();
//Rotas::get_Pagina();
//tamplates config//
//esse nome fica como se fosse uma variavel e o teste e o valor. quando for chamar esta variavel e nessesario o uso de '$'//
$smarty->assign('NOME','test');
$smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME',Rotas::get_SiteHOME());
$smarty->assign('GET_CARRINHO',Rotas::pag_Carrinho());
$smarty->assign('GET_CONTATO',Rotas::pag_Contato());
$smarty->assign('GET_MINHACONTA',Rotas::pag_MinhaConta());


//dbug de diretorio
//echo Rotas::get_SiteHome().'<br>';
//debug de raiz do site
//echo


//chama o template e deve ficar no final do codigo//
$smarty->display('index.tpl');
?>