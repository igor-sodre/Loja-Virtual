<?php 

Class Config{

	//informaçoes Basicas do site
    //http://127.0.0.1:8080
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "W.A Acessorios";
	const SITE_EMAIL_ADM = "theprojectcompracerta@gmail.com";
	//quantidade de itens por pagina
	const BD_LIMIT_POR_PAG = 9;
	//cep da loja fisica
	const SITE_CEP = '76105000';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojaonline",
		  //prefixo ele serve pra meio q criar uma inicial pre definida no banco de dados, pra evitar de ataques ao banco
		  BD_PREFIX = "qc_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "theprojectcompracerta@gmail.com";
	const EMAIL_NOME = "Loja virtual ...";
	const EMAIL_SENHA = "compracerta2020";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "Etheprojectcompracerta@gmail.com";


	//CONSTANTES PARA O PAGSEGURO
	const PS_EMAIL  = "alanpirescosta2@outlook.com"; // email pagseguro
    const PS_TOKEN  = ""; // token produção
    const PS_TOKEN_SBX = "A707A62B66054F4594060DC02B934266";  // token do sandbox
	//sandbox e para testes onde não vai cobrar nada 
    const PS_AMBIENTE = "sandbox"; // production   /  sandbox

}
 ?>

