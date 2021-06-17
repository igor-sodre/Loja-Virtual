<?php 
// !isset e negação
//a operação abaixo e pra evitar bugs em caso do usuario for fazer algo com um produto q pode ter sido excluido ou esteja sendo modificado
if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1){
	echo '<h4 class="alert alert-danger"> Erro na operação! </h4>';
	Rotas::Redirecionar(1, Rotas::pag_Carrinho());
	exit();
}

$id = (int)$_POST['pro_id'];

$carrinho = new Carrinho();

try {
	$carrinho->CarrinhoADD($id);
} catch (Exception $e) {
	echo '<h4 class="alert alert-danger"> Erro na operação! </h4>';
}

//bagulho pra mudar de pagina esse 1 ai e o tempo
Rotas::Redirecionar(1, Rotas::pag_Carrinho());

 ?>