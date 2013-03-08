<?php
//Software A FERRAMENTA
$titulo = pegaTitulo($id);
$filhos = pegaFilhos($id);
$custom = pegaCustom($id);
$perguntas = pegaPerguntas($id);

foreach($custom as $campo) {
	$$campo[nome] = $campo[conteudo];
}

include "templates/$id.php";

?>
