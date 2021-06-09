<?php 
//essa classe foi criada para evitar a repetiçao de codigo chamando o template em cada pagina//
Class Template extends SmartyBC{
	function __construct(){
		parent:: __construct();
		//-> esse simbolo usado apos o smarty e usado pra chamar um comando, esse comando abaixo e pra buscar o diretorio//
		$this->setTemplateDir('view/');
		//diretorio do compilador e cache setado pelo comando abaixo pra n ficar solto no diretorio//
		$this->setCompileDir('view/compile/');
		$this->setCacheDir('view/cache/');

	}
}

 ?>