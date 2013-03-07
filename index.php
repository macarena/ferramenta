<?php
//Software A FERRAMENTA
//começando com um index que simplesmente lista tudo.
require_once("db.php");
require_once("functions.php");

$lista = listaPaginas();

foreach($lista as $pagina) {
	echo "<a href=page.php?id=$pagina[id]>$pagina[titulo]</a><br />";
}

?>
