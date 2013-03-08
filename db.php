<?php
//arquivo de configuração e conexão do Banco de Dados;

$host = "localhost";
$db = "ferramenta";
$user = "root";
$senha = "M@c@r3n@";

$link = mysql_connect($host, $user, $senha);

if (!$link) {
	die('Não foi possível conectar: ' . mysql_error());
}

$db_selected = mysql_select_db($db, $link);
if (!$db_selected) {
	die ("Não é possível usar $db : " . mysql_error());
}

mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link);

?>
