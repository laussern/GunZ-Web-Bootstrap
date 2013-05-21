<?
    include 'php/config.php';
    include 'php/funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunz Online | Home</title>

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="bootstrap/img/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Gunz Online</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="divider-vertical"></li>
              <li class=""><a href="index.php">Inicio</a></li>
              <li class="divider-vertical"></li>
              <li><a href="index.php?p=registro">Registro</a></li>
              <li class="divider-vertical"></li>
              <li><a href="index.php?p=descargas">Descargas</a></li>
               <li class="divider-vertical"></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rankings <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?p=rankingp"><i class=icon-globe ></i> Ranking Individual</a></li>
                  <li class="divider"></li>
                  <li><a href="index.php?p=rankingc"><i class=icon-globe ></i> Ranking Clan</a></li>
                  <li class="divider"></li>
                  <li><a href="index.php?p=rankingd"><i class=icon-globe ></i> Ranking DuelTournament</a></li>
                </ul>
              </li>
              <li class="divider-vertical"></li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tienda<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?p=tiendad"><i class=icon-shopping-cart ></i>Tienda Donator</a></li>
                  <li><a href="index.php?p=tiendae"><i class=icon-shopping-cart ></i>Tienda Evento</a></li>
                  <li><a href="index.php?p=donar"><i class=icon-shopping-cart ></i>Donar</a></li>
                </ul>
              
              <li class="divider-vertical"></li>
                <li><a href="https://tuforo.com">Foro</a></li>
              <li class="divider-vertical"></li>
            </ul>
            <form action="index.php?p=login" class="navbar-form pull-right" method="post">
              <input class="span2" type="text" placeholder="Nombre de Usuario">
              <input class="span2" type="password" placeholder="Contraseña">
              <button type="submit" class="btn btn-inverse"><i class="icon-user icon-white"></i>Entrar!</button>
            </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <!-- Ranking Individual -->
            <?include "box/minirankp.php"; ?>
          <!-- -->
          <!-- Ranking Clan-->
            <?include "box/minirankc.php";?>
          <!-- -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Estatus del Servidor</li>
              <p><i class="icon-ok"></i> Servidor Online</p>
            </ul>
          </div>      
        </div><!--/span-->
        <div class="span9">
          <div class="alert alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Bienvenidos!</h4>
            Esperamos que disfrutes de nuestro servidor
          </div>
        </div><!--/row-->
          <?
            if(!isset($_GET['p'])) 
            {
              $pagina = "home"; 
            } 
            else 
            {
              $pagina = $_GET['p'];
            }
            if(file_exists("scripts/m_$pagina.php"))
            {
              include "scripts/m_$pagina.php";
            } 
            else 
            {
              ?>
              <script type="text/javascript">
                function redireccionar(){
                  window.location="index.php?p=404";
                } 
                setTimeout ("redireccionar()", 100);
              </script>
          <?
            } 
          ?>
      
            </div>
      <footer>
        <p><center>&copy; Diseñada y Programada por <a href="http://twitter/laussern" target="_blank">Kildare Lauser</a></center></p>
      </footer>
    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="js/custom.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
