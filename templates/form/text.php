<?php
echo "<div id=\"perguntas_$id_p\" class=\"pergunta $id\">";
echo "<span id=\"pergunta_$id_p\" class=\"pergunta $id\">$pergunta[enunciado]</span>";
echo "<input type=\"$tipo\" name=\"$id_p\" placeholder=\"" . $pergunta[opcoes][resposta] . "\" />";
echo "<br /></div>";
?>
