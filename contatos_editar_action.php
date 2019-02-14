<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php

$titulo	 	= $_POST['titulo'];
$idcontato	 	= $_POST['idcontato'];
$contato 	= $_POST['contato'];
$pagina 	= "contatos.php";
	
$query = "update contatos set titulo = '".$titulo."', contato = '".$contato."' where idcontatos = ".$idcontato.";";
$execQuery = mysql_query($query);

$msg = mensagem($execQuery,$pagina);


echo $msg;

?>		  
<?php include "footer.php"?>
