<?php

$smarty = new Template();
//pega os dados e confere se existe no banco o email e senha do usuario ou futuramente ADM
$login = new Login();
if(isset($_POST['txt_email']) && isset($_POST['txt_senha'])){
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login->GetLogin($user, $senha);

}

//teste de usuario manual
//$login->GetLogin('towerfallbrabissimo@homail.com','12345678');
//usuario recebe vazio pra n exibir erro enquanto o usuario n e logado
$smarty->assign('USER', '');
if(Login::Logado()){
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}
$smarty->assign('LOGADO', Login::Logado());


$smarty->display('login.tpl');



?>