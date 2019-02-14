<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php

$titulo	 	= $_POST['titulo'];
$subtitulo 	= $_POST['subtitulo'];
$posicao 	= $_POST['posicao'];
$artigo 	= nl2br($_POST['artigo']);
$pagina 	= "artigos.php";
	
$query = "update artigos set titulo = '".$titulo."', subtitulo = '".$subtitulo."', posicao = '".$posicao."', artigo = '".$artigo."' where idartigos = 1;";
$execQuery = mysql_query($query);

$msg = mensagem($execQuery,$pagina);


echo $msg;

?>		  
<?php include "footer.php"?>
