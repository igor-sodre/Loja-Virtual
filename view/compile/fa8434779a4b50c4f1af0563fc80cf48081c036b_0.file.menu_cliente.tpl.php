<?php
/* Smarty version 3.1.39, created on 2021-06-16 08:09:06
  from 'C:\wamp64\www\loja\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c9b1a2981351_50705010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8434779a4b50c4f1af0563fc80cf48081c036b' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\menu_cliente.tpl',
      1 => 1623830940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c9b1a2981351_50705010 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h4 class="text-center text-danger"> Olá <b><!--<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
--></b>, seja bem vindo! O que deseja fazer agora?</h4> 
<section class="row">
    
    <div class="text-center">
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="" class="btn btn-warning"> Alterar Senha </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
     
        
        
        
    </div>
    
    
    
    
    
</section><?php }
}
