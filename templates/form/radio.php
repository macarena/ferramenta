<?php
echo "<div id=\"perguntas_$id_p\" class=\"pergunta $id\">";
echo "<span id=\"pergunta_$id_p\" class=\"pergunta $id\">$pergunta[enunciado]</span><br />";
foreach($pergunta[opcoes] as $opcoes) echo "$opcoes[resposta]: <input type=\"$tipo\" name=\"$id_p\">";
echo "<br /></div>";
?>
