<?php

// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

$usuario = $_SESSION['UsuarioID'];

if(empty($usuario)){
	
	// Destr�i a sess�o por seguran�a
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: login.php"); exit;	
	
}


	




?>
