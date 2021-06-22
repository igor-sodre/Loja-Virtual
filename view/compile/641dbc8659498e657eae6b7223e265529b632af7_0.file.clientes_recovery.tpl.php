<?php
/* Smarty version 3.1.39, created on 2021-06-22 07:31:50
  from 'C:\wamp64\www\loja\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d191e6b3f914_20096060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641dbc8659498e657eae6b7223e265529b632af7' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\clientes_recovery.tpl',
      1 => 1624347108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d191e6b3f914_20096060 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-danger btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form><?php }
}
