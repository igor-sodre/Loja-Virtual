<?php
/* Smarty version 3.1.39, created on 2021-06-05 23:12:31
  from 'C:\Developer\Projeto\W_A_Acessorios\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bbe8bf72faf6_61112853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cb5fcafbe45c973bfc134ac60b92a653d9b5adb' => 
    array (
      0 => 'C:\\Developer\\Projeto\\W_A_Acessorios\\view\\index.html',
      1 => 1622927331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bbe8bf72faf6_61112853 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="view/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="view/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="view/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="view/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="view/imagens/logo.png" alt=""> 
                       
                </div>    
            
            </div><!-- fim da div topo -->
            
            <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">
                
                <!--começa navBAR-->
                <nav class="navbar navbar-inverse">
                    
                    <!-- container navBAr-->
                    <div class="container">
                        <!-- header da navbar-->
                        <div class="navbar-header">
                           <!-- botao que mostra e esconde a navbar--> 
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div><!--fim header navbar-->  
                        
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                               
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i> Minha Conta </a> </li>
                                <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a> </li>
                                <li><a href="#" ><i class="glyphicon glyphicon-envelope"></i> Contato </a> </li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Categorias <i class="glyphicon glyphicon-menu-down"></i></a> 
                                
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span> categoria 1 </a> </li>
                                     <li class="divider"></li>
                                     <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> categoria 2 </a> </li>
                                      <li class="divider"></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-bookmark"></i> categoria 3 </a> </li>
                                      <li class="divider"></li>
                                     <li><a href="#"> categoria 4 </a> </li>
                                    
                                    </ul>
                                
                                </li>
                               
                                
                            </ul>
                            

                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>
                            
                         </div><!-- fim navbar collapse-->   


                    </div> <!--fim container navBar-->
                    
                </nav><!-- fim da navBar-->   
                
                
                
                
                
            </div> <!-- fim barra menu--> 
            
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">
                    
                <div class="list-group">
                    <span class="list-group-item active"> Categorias</span>
                    
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Chinelos</a> 
                    <a href="#" class="list-group-item"><i class="glyphicon glyphicon-menu-right"></i> Bolsas</a> 
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Tapetes</a> 
                    
                    
                    
                </div><!--fim da list group-->              
                              
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                    
                    
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Info </a></li>
                    </ul>   
                    <!-- fim do menu breadcrumb-->             
                    
                  
                    
                </div>  <!--fim coluna direita-->  
            
            </div>   
                
                
            
                
                
                
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
            
            
            </div><!-- fim div rodape-->
            
            
            
           </div> <!-- fim do container geral -->
        
        
        
        
    </body>
</html>
<?php }
}
