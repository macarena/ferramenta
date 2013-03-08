<?php
//Software A FERRAMENTA
$titulo = pegaTitulo($id);
$filhos = pegaFilhos($id);
$custom = pegaCustom($id);
$perguntas = pegaPerguntas($id);

if($custom) {
	foreach($custom as $campo) {
		$$campo[nome] = $campo[conteudo];
	}
}

echo "<section id=$id>";
include "templates/$id.php";
echo "</section>";

?>
