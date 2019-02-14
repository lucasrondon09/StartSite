<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php

$nome	 	= $_POST['nome'];
$login 		= $_POST['login'];
$iduser 	= $_SESSION['UsuarioID'];
$pagina 	= "usuarios_editar.php";
	
$query = "update usuario set nome = '".$nome."', login = '".$login."' where idusuario = ".$iduser.";";
$execQuery = mysql_query($query);

$msg = mensagem($execQuery,$pagina);


echo $msg;


?>		  
<?php include "footer.php"?>
