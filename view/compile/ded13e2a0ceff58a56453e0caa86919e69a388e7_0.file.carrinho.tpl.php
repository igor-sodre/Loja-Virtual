<?php
/* Smarty version 3.1.40, created on 2021-10-27 11:41:36
  from 'C:\wamp64\www\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61796520dbb194_73943661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded13e2a0ceff58a56453e0caa86919e69a388e7' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\carrinho.tpl',
      1 => 1628885741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61796520dbb194_73943661 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php echo '<script'; ?>
>
$(document).ready(function(){    

   // validar frete
     $('#buscar_frete').click(function(){  
        
      var CEP_CLIENTE = $('#cep_frete').val();
      var PESO_FRETE = $('#peso_frete').val();
      var ALTURA_FRETE = $('#peso_frete').val();
      var LARGURA_FRETE = $('#largura_frete').val();
      var COMPRIMENTO_FRETE = $('#comprimento_frete').val();
       
        if (CEP_CLIENTE.length !== 8 ) {
        alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');  
         $('#frete').addClass(' text-center text-danger');
         $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
        $('#cep_frete').focus();
        } else {
     
       
        $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
        $('#frete').addClass(' text-center text-danger');
      
        // carrego o combo com os bairros
       
        $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE+'&alturafrete='+ALTURA_FRETE+
        '&largurafrete='+LARGURA_FRETE+'&comprimentofrete='+COMPRIMENTO_FRETE);
 
 } // fim do IF digitei o CEP
      
 
    }); // fim do change
    
   
} ); // fim do ready

<?php echo '</script'; ?>
>


  <h3>Meu Carrinho</h3>

<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-info" title="">Comprar Mais</a>
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
            <td></td> 
            
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
            <td> 
                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                  
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                </form>
            </td>
            
            
        </tr>
        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        

        <!--  bloco frete -->
           <section class="row" id="dadosfrete">
                    
               
             
               
               <div class="col-md-4"></div>
                   
                   
               <div class="col-md-4">
                   
                   <!-- campos para tratar  do  frete -->
                   <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
                   <!--DEBUG DA GAMBIARA do frete-->
                   <input type="hidden" name="altura_frete" id="altura_frete" value="<?php echo $_smarty_tpl->tpl_vars['ALTURA']->value;?>
" class="form-control " readonly>
                   <input type="hidden" name="largura_frete" id="largura_frete" value="<?php echo $_smarty_tpl->tpl_vars['LARGURA']->value;?>
" class="form-control " readonly>
                   <input type="hidden" name="comprimento_frete" id="comprimento_frete" value="<?php echo $_smarty_tpl->tpl_vars['COMPRIMENTO']->value;?>
" class="form-control " readonly>
                   
                   
                   <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >
                  
                   
                   <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                   
                   
               </div> 
               
              
                   <div class="col-md-4">
                       <!-- botão frete -->

                    <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>
                    <br>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SOLICITAR']->value;?>
">
                    <button class="btn btn-danger btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-globe"></i> Solicitar Entrega / Retirada ma loja</button>
                      
                       
                   </div>          
                                
                                
                                
          </section>


          <br><hr>

        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

                </form>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">

                     <span id="frete"></span>
                     
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>



                 </form>

            </div>



            
               <!-- botão finalzar -->
              
       

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
