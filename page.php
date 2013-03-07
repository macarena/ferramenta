<?php
//Software A FERRAMENTA

require_once("db.php");
require_once("functions.php");

echo "<pre>";
$pagina = pegaPagina($_GET[id]);
$filhos = pegaFilhos($_GET[id]);
$custom = pegaCustom($_GET[id]);
$perguntas = pegaPerguntas($_GET[id]);
echo "</pre>";

foreach($pagina as $k=>$v) {
	$$k = $v;
}

foreach($custom as $campo) {
	$$campo[nome] = $campo[conteudo];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include "templates/$id.php"; ?>

</body>
</html>
