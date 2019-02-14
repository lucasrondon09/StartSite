<?php
include("acesso_restrito.php");

$user = $_SESSION['UsuarioNome'];

?>
<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gerenciador de Site</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Start Site</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
          <h6 style="color: #CBCBCB"><?php echo $user;?></h6>

      </div>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="usuarios_editar.php">Editar</a>
			<a class="dropdown-item" href="usuarios_editar_senha.php">Alterar Senha</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Sair</a>
          </div>
        </li>
      </ul>

    </nav>
	<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="artigos.php">
            <i class="fas fa-file-alt"></i>
            <span>Artigos</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="imagens.php">
            <i class="fas fa-file-image"></i>
            <span>Imagens</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="videos.php">
            <i class="fas fa-file-video"></i>
            <span>Vídeos</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contatos.php">
            <i class="fas fa-id-badge"></i>
            <span>Contatos</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="paginas.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Páginas</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="blog.php">
            <i class="fab fa-blogger-b"></i>
            <span>Blog</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="noticias.php">
            <i class="fas fa-newspaper"></i>
            <span>Notícias</span>
          </a>
        </li> 
		<li class="nav-item">
          <a class="nav-link" href="galeria.php">
            <i class="fas fa-images"></i>
            <span>Galeria de Fotos</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="emailmarketing.php">
            <i class="fas fa-envelope"></i>
            <span>E-Mail Marketing</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="desenvolvedor.php">
            <i class="fas fa-coffee"></i>
            <span>Desenvolvedor</span>
          </a>
        </li>
		<!--  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>-->
      </ul>