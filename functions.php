<?php

function listaPaginas() {
	$query = mysql_query("SELECT * FROM paginas");
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$lista[] = $row;
	}
	
	return $lista;
}

function pegaPagina($id) {
	$query = mysql_query("SELECT * FROM paginas WHERE id LIKE '$id'");
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$pagina = $row;
	}
	
	return $pagina;
}

function pegaFilhos($id) {
	$query = mysql_query("SELECT id, titulo, alt FROM paginas WHERE pai LIKE '$id'");
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$filhos[] = $row;
	}
	
	return $filhos;
}

function pegaCustom($id) {
	$query = mysql_query("SELECT nome, conteudo FROM custom WHERE pagina LIKE '$id'");
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$custom[] = $row;
	}
	
	return $custom;
}

function pegaPerguntas($id) {
	$query = mysql_query("SELECT pergunta FROM vinculo WHERE pagina LIKE '$id'");
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		$ids[] = $row[pergunta];
	}

	foreach($ids as $id) {
		$query = mysql_query("SELECT enunciado, imagem, tipo FROM perguntas WHERE id LIKE '$id'");

		while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
			$perguntas[$id[pergunta]] = $row;
		}
	}
	
	foreach($perguntas as $id=>$pergunta) {
		$perguntas[$id]['opcoes'] = pegaRespostasPossiveis($id);
	}
	//print_r($perguntas);
	return $perguntas;
}

function pegaRespostasPossiveis($id) {
	$query = mysql_query("SELECT * FROM respostas_possiveis WHERE pergunta LIKE $id");
	$count = mysql_query("SELECT COUNT(*) FROM respostas_possiveis WHERE pergunta LIKE $id");
	$count = mysql_fetch_array($count);
	$count = $count[0];
	
	while($row = mysql_fetch_assoc($query)) {
		if($count > 1) $opcoes[] = $row;
		else $opcoes = $row;
		//print_r(count($row));
		//print_r($row);
	}

	//print_r($opcoes);
	
	return $opcoes;
}

?>
