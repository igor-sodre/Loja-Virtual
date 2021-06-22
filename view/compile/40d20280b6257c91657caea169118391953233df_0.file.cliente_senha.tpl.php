<?php
/* Smarty version 3.1.39, created on 2021-06-22 08:43:52
  from 'C:\wamp64\www\loja\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d1a2c81c4fb6_63653459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d20280b6257c91657caea169118391953233df' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\cliente_senha.tpl',
      1 => 1624351427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d1a2c81c4fb6_63653459 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alterar Senha</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-danger btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form><?php }
}
