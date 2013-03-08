<div class="page-header">
	<h1><? echo "$titulo"; ?></h1>
</div>

<div class="row">
<div class="span12">
<blockquote class="pull-right">
	<p>"Quem não se comunica, se trumbica!"</p>
	<small>Chacrinha</small>
</blockquote>

<p class="lead">Esse é o texto descritivo sobre Comunicação.</p>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore...</p>

<?
foreach($filhos as $filho) {
	echo "<a href=?id=$id#$filho[id] class=\"btn btn-block btn-primary\" alt=\"$filho[alt]\" >$filho[titulo]</a>";
}
?>
</div></div>
