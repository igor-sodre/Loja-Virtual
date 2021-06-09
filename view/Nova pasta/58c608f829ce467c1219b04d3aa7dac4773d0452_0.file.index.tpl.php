<?php
/* Smarty version 3.1.39, created on 2021-06-05 03:32:00
  from 'C:\Developer\Projeto\W.A Acessorios\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bad41083c2e0_91212220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58c608f829ce467c1219b04d3aa7dac4773d0452' => 
    array (
      0 => 'C:\\Developer\\Projeto\\W.A Acessorios\\view\\index.tpl',
      1 => 1622337243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bad41083c2e0_91212220 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>W.A Acessorios</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="view/css/style.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- cuidado com o krl do css/bootstrap pra n cagar com o bagulho olhar style.css se for usar local -->
        
    </head>
    <body>
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">W.A Acessorios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
">
                                Carrinho
                                
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#!">??</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="../view/contato.html">Entre Em Contato</a></li>
                    </ul>
                </div>
            </div>
         <form class="d-flex">
         <input class="form-control me-1" type="search" placeholder="Procurar" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Procurar</button>
        </nav>

        <!--Parte do lado Direito-->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">Categorias</h1>
                    <div class="list-group">
                        <a class="list-group-item" href="#!">Bolsas</a>
                        <a class="list-group-item" href="#!">Tapetes</a>
                        <a class="list-group-item" href="#!">Chinelos Bordados</a>
                    </div>
                </div>
               <!-- carrosel -->
                <div class="col-lg-9">
                    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="First slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Second slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--Produtos -->
                    <div id="pagina_caregada">
                                        <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item One</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Two</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Three</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Four</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Five</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Six</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    </div>


        <!-- Rodape-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; StrayDogsDev 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- Core theme JS-->
        <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
