<?php
/* Smarty version 3.1.39, created on 2021-06-15 08:03:24
  from 'C:\wamp64\www\loja\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c85ecc85ec77_02407525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a78feb3ccf0e9fcfbbfb294e4b39b6e483c325a' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\login.tpl',
      1 => 1623744178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c85ecc85ec77_02407525 (Smarty_Internal_Template $_smarty_tpl) {
?>    <!--if dentro das {} dispensa a abertura de um bloco PHP -->
    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
    <h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4> 
<section class="row">
    
    <div class="text-center">
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="" class="btn btn-warning"> Alterar Senha </a>
        <a href="" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
        
        
    </div>
    
    
    
    
    
</section>
    
    <?php } else { ?>
    <section class="row" id="fazerlogin">

    <form name="cliente_login" method="post" action="" >
    
        <div class="col-md-4 text-center">
        <!--teste se esta reconhecendo o usuario q esta logado--> 
        <!--<p><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</p>-->
                
          
        
        </div>
     
        <!---  aqui estão os campos -->
        <div class="col-md-4">

     
            <div class="form-group"> 
                <label></i> Email: </label>
                <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        

            </div>


            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>        
           
            </div>


            <div class="form-group"> 
                
                <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>
          
                
                
                
            </div>
            <div class="form-group"> 
                
                <a href="" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>
             
                
                <a href="" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>
           
                
                
            </div>

            
        </div><!-- fim dos campos -->


        <div class="col-md-4 text-center"> 
        
      
        </div>
    
    </form>
    
    
</section>
<?php }
}
}
