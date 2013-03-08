<?php
//Software A FERRAMENTA
//começando com um index que simplesmente lista tudo.
require_once("db.php");
require_once("functions.php");
$pagina = pegaPagina($_GET[id]);
$lista = pegaFilhos($_GET[id]);
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>A Ferramenta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Boneco de teste dA Ferramenta">
    <meta name="author" content="Projeto Memória FJM">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="http://bootswatch.com/amelia/bootstrap.css" rel="stylesheet">
    <link href="http://bootswatch.com/default/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://bootswatch.com/css/font-awesome.css" rel="stylesheet">
    <link href="http://bootswatch.com/css/bootswatch.css" rel="stylesheet">

</head>

  <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">


  <!-- Navbar
    ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="index.php">A Ferramenta</a>
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
          <li><a href="">Quem Somos?</a></li>
			<li><a href="">Justificativa</a></li>
        </ul>

       </div>
     </div>
   </div>
 </div>

    <div class="container">


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="row">
    <div class="span6">
      <h1>A Ferramenta</h1>
      <p class="lead">Boneco de teste.</p>
    </div>
  </div>
  <div class="subnav">
    <ul class="nav nav-pills">
      <?
      foreach($lista as $pag) {
			echo "<li><a href=\"#$pag[id]\">$pag[titulo]</a></li>";
      }
      ?>
    </ul>
  </div>
</header>

<?
foreach($lista as $pag) {
	$id = $pag[id];
	include "page.php";
}
?>
<br/><br/><br/><br/><br/><br/>
</div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="http://bootswatch.com/js/bootstrap.js"></script>
    <script src="http://bootswatch.com/js/bootswatch.js"></script>


  

</body></html>
