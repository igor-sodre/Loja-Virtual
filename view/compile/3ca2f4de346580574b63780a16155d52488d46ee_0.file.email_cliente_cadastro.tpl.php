<?php
/* Smarty version 3.1.39, created on 2021-06-22 06:42:48
  from 'C:\wamp64\www\loja\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d186682ea0b1_14617769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca2f4de346580574b63780a16155d52488d46ee' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\email_cliente_cadastro.tpl',
      1 => 1624343407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d186682ea0b1_14617769 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<h3> Cadastro realizado com sucesso,  para fazer o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<h3>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</h3><?php }
}
