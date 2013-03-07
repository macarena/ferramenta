<?php
//Software A FERRAMENTA
//começando com um index que simplesmente lista tudo.
require_once("db.php");
require_once("functions.php");

$lista = listaPaginas();

?>

    <!DOCTYPE html>
    <html>
    <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
    <h1>Hello, world!</h1>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

<?
foreach($lista as $pagina) {
	echo "<a href=page.php?id=$pagina[id]>$pagina[titulo]</a><br />";
}

?>
</body>
</html>
