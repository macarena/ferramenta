<?php
//Software A FERRAMENTA

require_once("db.php");
require_once("functions.php");

echo "<pre>";
$pagina = pegaPagina($_GET[id]);
$filhos = pegaFilhos($_GET[id]);
$custom = pegaCustom($_GET[id]);
$perguntas = pegaPerguntas($_GET[id]);
echo "</pre>";

foreach($pagina as $k=>$v) {
	$$k = $v;
}

foreach($custom as $campo) {
	$$campo[nome] = $campo[conteudo];
}

include "templates/$id.php";
?>

