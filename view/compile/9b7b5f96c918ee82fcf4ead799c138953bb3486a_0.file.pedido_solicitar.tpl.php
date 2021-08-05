<?php
/* Smarty version 3.1.39, created on 2021-08-05 17:36:56
  from 'C:\wamp64\www\loja\view\pedido_solicitar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610c4be85c7a85_19231868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7b5f96c918ee82fcf4ead799c138953bb3486a' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\pedido_solicitar.tpl',
      1 => 1628195814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610c4be85c7a85_19231868 (Smarty_Internal_Template $_smarty_tpl) {
?>  <h3>Solicitar Entrega</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-info" title="">Voltar para Carrinho</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">

<!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->
       
        <tr class="text-danger bg-danger">
            <td></td> 
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
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
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
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
            <!--Informaçoes da compra como preco e frete-->
               Valor do Produto : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>

            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

               
                    <form name="pedido_finalizar" id="pedido_finalizar"" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Solicitar Entrega </button>
                 </form>

            </div>

            
               <!-- botão finalzar -->
              
          

        </section>
            <br>
            <hr>
           
       </form> 


       <h3>Descrição:</h3>
        Solicitar entrega consiste, em nos mesmos fazermos a entrega em seu domicilio cobrando uma certa taxa com base na distancia, entraremos em ate 24 Horas
        para confirmar as devidas informações.
        <br><br>
        <h4>Perguntas Respondidas:</h4> 
        1)Onde realizar o pagamento?
        <br>
        R:Ele e realizado na entrega do produto, tudo sera confirmado por telefone antes da entrega          
        <br><br>
        2)Formas de pagamento?
        <br>
        R:Dinheiro, cartão de credito, pix, caso peferir outro metodo favor nos perguntar antes.
        <br><br>
        3)Horario da entrega?
        <br>
        R:durante o horario comercial, se desejar atendimento fora destes horarios havera uma taxa a mais
        <br><br>
        4)Passou do prazo de atendimento?
        <br>
        R:Pedimos desculpas sobre o ocorrido e solicitamos que entrem em contato no seguinte numero: (64)9 9941-7078
       </div>
       
         
  </section>
<?php }
}
