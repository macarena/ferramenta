<?
echo "<h1>$titulo</h1>";
echo "<p>$frase</p>";

echo "<p>$descritivo</p>";

foreach($filhos as $filho) {
	echo "<a href=page.php?id=$filho[id] alt=\"$filho[alt]\" >$filho[titulo]</a><br/>";
}
?>
