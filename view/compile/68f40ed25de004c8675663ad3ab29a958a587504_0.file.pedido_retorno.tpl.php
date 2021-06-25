<?php
/* Smarty version 3.1.39, created on 2021-06-25 04:07:22
  from 'C:\wamp64\www\loja\view\pedido_retorno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d580aa5a4143_96065147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f40ed25de004c8675663ad3ab29a958a587504' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\pedido_retorno.tpl',
      1 => 1624576328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d580aa5a4143_96065147 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
<hr>
<section class="row">
    
    <div class="col-md-3"></div> 
   
    <div class="col-md-6 thumbnail">
        
        
         <h4> Informações do pagamento </h4>
            <p> <b>Código transação:</b> <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</p>
            <p> <b>Referencia:</b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
            <p> <b>Status do pagamento:</b> <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
</p>
            <p> <b>Forma pagamento: </b><?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
            
            
         
            <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
                <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>



            </form>        

        
    </div> 
    <div class="col-md-3"></div> 
    
    
   
    
    
</section>

<?php }
}
