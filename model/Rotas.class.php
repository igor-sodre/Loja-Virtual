<?php
class Rotas{
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME(){
      return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_SiteRaiz(){
      return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
      return  self::get_SiteHOME(). '/' .self::$pasta_view;
    }


    static function pag_Carrinho(){
      return self::get_SiteHome() . '/carrinho';
    }

    static function pag_Contato(){
      return self::get_SiteHome() . '/contato';
    }
    static function pag_MinhaConta(){
      return self::get_SiteHOME() . '/minhaconta';
    }

    static function get_Pagina(){
      if(isset($_GET['pag'])){

        $pagina = $_GET['pag'];
        self::$pag = explode('/', $pagina);


          //para debug do array//
          //echo'<pre>';
          //var_dump(self::$pag);
          //echo'</pre>';

          //a linha aseguir e para a definiçao do array para zero, para fazer a verificação da pagina se ela existe mesmo se for
          //passado algo mais apos a '/' 
          //o ponto fora das chaves e para concatenaçao para abrir o arquivo NAO ESQUECER DE COLOCAR O . para definir o formato
          
          $pagina = 'controller/' .self::$pag[0] . '.php';
          //$pagina = 'controller/' .$_GET['pag'] . '.php'; 
          if(file_exists($pagina)){
            include $pagina;
         }else{
            include 'erro.php';
        }
    }
        

        
    }
}
