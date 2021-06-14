<?php

class Pedidos extends Conexao{
    function __construct(){
        parent::__construct();
    }
    function PedidoGravar($cliente, $cod, $ref, $freteValor=null, $freteTipo=null){
        $retorno = FALSE;
        //esse modelo de query com . faz concatenar as linhas pra n ter q deixar o codigo todo junto assim reduzindo erros de escrita 
        $query  = "INSERT INTO ".$this->prefix."pedidos ";   
        $query .= "(ped_data, ped_hora, ped_cliente, ped_cod, ped_ref, ped_frete_valor, ped_frete_tipo)"; 
        $query .= " VALUES ";
        $query .= "(:data, :hora, :cliente, :cod, :ref, :frete_valor, :frete_tipo)";

        $params = array(
        ':data' => Sistema::DataAtualUS(),
        ':hora' => Sistema::HoraAtual(),
        ':cliente'=> (int)$cliente,
        ':cod' => $cod,
        ':ref' => $ref,
        ':frete_valor'=>$freteValor,
        ':frete_tipo' =>$freteTipo   
        );

        $this->ExecuteSQL($query, $params);
        //gravar itens do pedido
        $this->itensGravar($cod);
        $retorno = TRUE;
        return $retorno;
    }
    function ItensGravar($codpedido){
        $carrinho = new carrinho();
        foreach ($carrinho->GetCarrinho() as $item) {
            $query  = "INSERT INTO ".$this->prefix."pedidos_itens ";
            $query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
            $query .= "VALUES  (:produto,:valor,:qtd,:cod)";
                
                $params = array(
                ':produto' => $item['pro_id'],
                ':valor'   => $item['pro_valor_us'],
                ':qtd'     => (int)$item['pro_qtd'],
                ':cod'     =>  $codpedido  
                );
                $this->ExecuteSQL($query, $params);


        }
    }

    function LimparSessoes(){
        unset($_SESSION['PRO']);
        unset($_SESSION['pedido']);
        
    }





}





?>