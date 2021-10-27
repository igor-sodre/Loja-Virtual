<?php
/* Smarty version 3.1.40, created on 2021-10-27 11:41:39
  from 'C:\wamp64\www\loja\view\email_compra2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_617965233e02c9_65154812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5d7fb23365410ccc4f35cfe8ff414fed1b1664' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\email_compra2.tpl',
      1 => 1628203872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617965233e02c9_65154812 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Css pra estrutura do email-->
<style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, td {
    text-align: left;
    padding: 8px;
}

.tabela tr:nth-child(odd){
  background-color: #b2b2b2;
}

.sessao{
  
  padding:20px;
}


.total{
  text-align:right;
}

.frete{
  text-align:right;
}

.totalfrete{
  text-align:right;
  font-size:18px;
  font-style: bold;
  color:#062a46;
}





.textoinicio{
  text-align:center;
}

.minhaconta{
  text-align:center;
}


</style>

<p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 ,foi solicitada a entega de seu produto, obrigado pela sua Preferencia em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p>


  <section class="row">
      <p class="minhaconta">
          Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
          <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" > Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>
      
      </p>                 
                   
  </section>


<section class="row ">
   
    <center>
      
     
   <br>
        
    <table class="tabela" style="width: 95%;">
     
        <tr style="
            border: 1px solid #b2dba1; 
            
            background-color: #072339;
            color:#FFF;
            font-size:18px;" >

          <td colspan="5">Itens do seu pedido </td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
            <tr style="border: 1px solid #b2dba1">
            
           <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 "> </td> 
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
   </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
          
            
            
        </tr>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->


   <!-- botoes de baixo e valor total -->
        <div class="sessao">
                      
            

               <p class="total">
               <b>Total :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

               </p>
               <p class="frete">
               <b>Frete</b> : R$ 00,00
               </p>
               <p class="totalfrete">
               <b>Final : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</b>
               </p>

            
            
            
        </div>
               <br>
             <?php }
}
