<div class="page-header">
	<h1><? echo "$titulo"; ?></h1>
</div>

<div class="row">
	<div class="span12">
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvoluptua. At vero eos et accusam et justo duo dolores et ea rebum. SteTEste</p>
	</div>
</div>

<div class="row">
	<div class="span8">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th></th>
					<th>Ferramenta</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>icone</td>
					<td>Goole+</td>
					<td>_</td>
				</tr>
				<tr>
					<td>icone</td>
					<td>Facebook</td>
					<td>_</td>
				</tr>
				<tr>
					<td>icone</td>
					<td>Twitter</td>
					<td>_</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="span4">
		<? foreach($filhos as $filho) { echo "<a href=?id=$id#$filho[id] class=\"btn btn-large btn-block btn-warning\" alt=\"$filho[alt]\" >Não quero ler TUDO isso!<br/><small>Me ajude a escolher....</small></a>"; } ?>
	</div>
</div>
