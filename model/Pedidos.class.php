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
    function GetPedidosCliente($cliente=null){
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        //não esqueça query (espaço).= e pra concatenar com a linha anterior
        $query .= "ON p.ped_cliente = c.cli_id";
        //verifica se o usuario existe
        if($cliente != null){
            $cli = (int)$cliente;
            //quando estiver lincando com o banco e for usar uma variavel n esqueça das {}
            $query .= "WHERE ped_cliente = {$cli}";

        }
        $this->ExecuteSQL($query);
        $this->GetLista();

    }
    private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
                'ped_id'    => $lista['ped_id'],
                'ped_data'  => Sistema::Fdata($lista['ped_data']),
                'ped_data_us'  => $lista['ped_data'],
                'ped_hora'   => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod'   => $lista['ped_cod'],
                'ped_ref'     => $lista['ped_ref'],
                'ped_pag_status' => $lista['ped_pag_status'],
                'ped_pag_forma'   => $lista['ped_pag_forma'],
                'ped_pag_tipo'    => $lista['ped_pag_tipo'],
                'ped_pag_codigo'   => $lista['ped_pag_codigo'],
                'ped_frete_valor' => $lista['ped_frete_valor'],
                'ped_frete_tipo'  => $lista['ped_frete_tipo'],
                'cli_nome'  => $lista['cli_nome'],
                'cli_sobrenome'  => $lista['cli_sobrenome'],
            );
        
        
            $i++;
        
        endwhile;
        
        
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