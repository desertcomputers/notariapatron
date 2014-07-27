<body>
<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
    <!-- Start Navigation Bar -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">Notaria Patr&oacute;n Balarezo</a>
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php">Inicio</a></li>
               <!-- <li <?=echoActiveClassIfRequestMatches("quienes")?>><a href="quienes.php">Qui&eacute;nes Somos</a></li> -->
                <li <?=echoActiveClassIfRequestMatches("servicios")?> class="dropdown">
                  <a href="servicios.php" class="dropdown-toggle" data-toggle="dropdown">Nuestros Servicios<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="servicios.php#protocolares">Protocolares</a></li>
                    <li><a href="servicios.php#extraprotocolares">Extraprotocolares</a></li>
                    <!--<li><a href="#">Something else here</a></li>-->
                   <!--  <li class="divider"></li> -->
                  </ul>

                    <li <?=echoActiveClassIfRequestMatches("interes")?>><a href="interes.php">Enlaces de Inter&eacute;s</a></li>
                    <li class="divider"></li>
                    <!-- <li <?=echoActiveClassIfRequestMatches("descargas")?>><a href="descargas.php">Descargas</a></li> -->
                  
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li <?=echoActiveClassIfRequestMatches("mapa")?>><a href="mapa.php">Mapa de Ubicaci&oacute;n</a></li>
                <li <?=echoActiveClassIfRequestMatches("contacto")?>><a href="contacto.php">Cont&aacute;ctenos</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navigation Bar -->