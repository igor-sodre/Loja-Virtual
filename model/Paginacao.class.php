<?php 
//gerencia os itens a aparecerem por paginas
class Paginacao extends Conexao{

	public $limite, $inicio, $totalpags, $link = array();

	function GetPaginacao($campo, $tabela){
		$query = "SELECT {$campo} FROM {$tabela}";
		$this->ExecuteSQL($query);
		$total = $this->TotalDados();

		//arredonda a paginação para um numero maior exemplo, se ficar 3 intens por pagina e for um total de 10 itens vai ficar errado a conta
		//ai com isso fica 4 paginas 3 com 3 itens e a ultima com apenas 1

		$this->limite = Config::BD_LIMIT_POR_PAG;
		$paginas = ceil($total / $this->limite);
		$this->totalpags = $paginas;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		if($p > $paginas){
			$p = $paginas;
		}

		//calculo pra verificar a quantidade por pagina
		//e sistema de tolerancea pra não colocar todas as paginas de uma vez e nao exibir numeros negativos
		$this->inicio = ($p * $this->limite) - $this->limite;

		$tolerancia = 4;
		$mostrar = $p + $tolerancia;
		if($mostrar > $paginas){
			$mostrar = $paginas;
		}


		for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
			if($i < 1){
				$i = 1;
			}
			array_push($this->link, $i);

		endfor;




		


	}
}

 ?>