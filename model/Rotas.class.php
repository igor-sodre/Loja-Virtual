<?php
class Rotas{
    public static $pag;

    static function get_SiteHome(){
      return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_Pagina(){
        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina) ;


          //para debug do array//
          //echo'<pre>';
          //var_dump(self::$pag);
          //echo'</pre>';

          //a linha aseguir e para a definiçao do array para zero, para fazer a verificação da pagina se ela existe mesmo se for
          //passado algo mais apos a '/' 
          //o ponto fora das chaves e para concatenaçao para abrir o arquivo NAO ESQUECER DE COLOCAR O . para definir o formato
          
         $pagina = 'controller/'.self::$pag[0] . '.php';
         //$pagina = 'controller/' . $_GET['pag']  . '.php'; 
         if(file_exists($pagina)){
           include $pagina;
         }else{
            include 'erro.php';
        }
    }
        

        
    }
}
