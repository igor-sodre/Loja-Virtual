<?php
    class Config{

        //informaçoes Basicas do site
        const SITE_URL = "http://localhost";
        const SITE_PASTA = "LOJA_VIRUTAL";
        const SITE_NOME = "Loja HS";
        const SITE_EMAIL_ADM = "emailquevoucriar@gmail.com";

        //Informaçoes do banco de dados
        const BD_HOST = "localhost",
              BD_USER = "root",
              BD_SENHA = "",
              BD_BANCO = "lojaonline";

    //Informaçoes para PHP MAILLER (trata envio automatico de emails)
        const EMAIL_HOST = "smtp.gmail.com";
        const EMAIL_USER = "EMAIL NAO CRIADO insirir aki";
        const EMAIL_NOME = "Loja virtual ...";
        const EMAIL_SENHA = "Senha do EMAIL AKI";
        const EMAIL_PORTA = "587";
        const EMAIL_SMTPAUTH = true;
        const EMAIL_SMTPSECURE = "tls";
        const EMAIL_COPIA = "EMAIL NAO CRIADO insirir aki";
    } 
?>