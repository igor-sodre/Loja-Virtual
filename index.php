<?php
   //esse require busca a biblioteca do composer //
  require './lib/autoload.php';

//realiza associaçaoes para o template//
$smarty = new Template();
Rotas::get_Pagina();
//tamplates config//
//esse nome fica como se fosse uma variavel e o teste e o valor. quando for chamar esta variavel e nessesario o uso de '$'//
$smarty->assign('NOME','test');


//chama o template e deve ficar no final do codigo//
$smarty->display('index.tpl');
?>