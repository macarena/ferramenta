<?php
//Software A FERRAMENTA
//começando com um index que simplesmente lista tudo.
require_once("db.php");
require_once("functions.php");

$pagina = pegaPagina($_GET[id]);
$lista = listaPaginasNivel($pagina[pai]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>A Ferramenta</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="http://bootswatch.com/amelia/bootstrap.min.css" rel="stylesheet" media="screen">
<style> body { padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */ } </style>
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="brand">Project name</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<div class="container">
	<h1>Boneco de teste</h1>
	<p>Este é um boneco de teste para A Ferramenta.<br>A Ferramenta é uma poderosa ferramenta.<br/>
	Uma ferramenta para todos governar, uma ferramenta para encontrá-los.<br/>Uma ferramenta para todos trazer e na escuridão aprisioná-los.</p>
	<hr>
	<div class="row">
		<div class="span3"></div>
		<div class="span9">
		<?
		foreach($lista as $pagina) {
			$id = $pagina[id];
			include "page.php";
		}
		?>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
