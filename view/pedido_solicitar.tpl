  <h3>Solicitar Entrega</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="{$PAG_CARRINHO}" class="btn btn-info" title="">Voltar para Carrinho</a>
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
     
        
       {foreach from=$PRO item=P}
        
        <tr>
            
            <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
            <td>  {$P.pro_nome} </td>
            <td>  {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td>  {$P.pro_subTotal} </td>
            
            
            
        </tr>
        
       {/foreach}
        
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
               Total : R$ {$TOTAL}
            </h4>

            <h4>
               Frete : R$ 00,00
            </h4>
            <hr>
            <h4>
               Total com Frete : R$ {$TOTAL}
            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

               
                    <form name="pedido_finalizar" id="pedido_finalizar"" method="post" action="{$PAG_FINALIZAR_SOLI}">
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
