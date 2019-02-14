<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php

$senha1	 	= $_POST['senha1'];
$senha2 	= $_POST['senha2'];
$iduser 	= $_SESSION['UsuarioID'];
$pagina 	= "index.php";

if($senha1 === $senha2){
	$query = "update usuario set senha = '".sha1($senha1)."' where idusuario = ".$iduser.";";
	$execQuery = mysql_query($query);

	$msg = mensagem($execQuery,$pagina);


	echo $msg;
}else{
	
	$msg = '<div class="alert alert-danger" role="alert">Houve uma falha no processo, verifique!</div>';
	
	echo '<div id="content-wrapper">
        <div class="container-fluid">'.$msg.'
		  <a href="'.$pagina.'" class="btn btn-primary">Voltar</a>
        </div>';
	
	
	
	
}
	



?>		  
<?php include "footer.php"?>
