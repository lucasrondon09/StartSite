<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

$usuario = $_SESSION['UsuarioID'];

if(empty($usuario)){
	
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: login.php"); exit;	
	
}


	




?>
