<?php 

Class Config{

	//informaçoes Basicas do site
    //http://127.0.0.1:8080
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "W.A Acessorios";
	const SITE_EMAIL_ADM = "theprojectcompracerta@gmail.com";
	//quantidade de itens por pagina
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '76150000';


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



}
 ?>

