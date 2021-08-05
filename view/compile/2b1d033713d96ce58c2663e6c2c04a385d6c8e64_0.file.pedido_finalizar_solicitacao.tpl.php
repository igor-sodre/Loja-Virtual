<?php
/* Smarty version 3.1.39, created on 2021-08-05 19:03:19
  from 'C:\wamp64\www\loja\view\pedido_finalizar_solicitacao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610c6027e087d0_01620282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1d033713d96ce58c2663e6c2c04a385d6c8e64' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\pedido_finalizar_solicitacao.tpl',
      1 => 1628200544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610c6027e087d0_01620282 (Smarty_Internal_Template $_smarty_tpl) {
?>  <h3>Finalizar Solicitação</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
   
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">


   
    <center>
    <div class="alert alert-success">Pedido Finalizado com Sucesso</div>
    aguarde nosso contato em ate 24 horas
    <table class="table table-bordered" style="width: 95%">

<!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->
       
        <tr class="text-danger bg-danger">
        
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>Quantidade</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
        <tr>
            
           
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
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
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-12 text-right text-danger bg-warning" align="right">
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            <h4>
               Frete : R$ 00
            </h4>
            <h4>
               Total do Pedido : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            
            </div>
            
           
              
          

        </section>
                    <br>
                    
    
                   
           
           <hr>
           
       </form>  
       
       </div>
       
                   
                        
  </section>



       <br>
       <br>
       <br>
       <br><?php }
}
