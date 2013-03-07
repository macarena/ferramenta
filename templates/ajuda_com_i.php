<?
echo "<h1>$titulo</h1>";

foreach($perguntas as $id_p=>$pergunta) {
	$tipo = $pergunta[tipo];
	include "form/$tipo.php";
}
?>
