	<?php
	  $error = 0;
	  
	  include('conexao.php');

	  @$user = $_POST['usuario'];
	  @$pass = $_POST['senha'];
	  
	  if(!empty($user && $pass)){
		  
		$query = "SELECT * FROM usuario where login = '".$user."' and senha=('".sha1($pass)."') and st > 0; ";
		$execQuery = mysql_query($query);
		$numQuery = mysql_num_rows($execQuery);
		  
		  if($numQuery > 0){
			  
			$resultado = mysql_fetch_assoc($execQuery);
			if (!isset($_SESSION)) session_start();
			  
			$_SESSION['UsuarioID'] = $resultado['idusuario'];
			$_SESSION['UsuarioNome'] = $resultado['nome'];
			  
			 header("Location: index.php");  exit;
			  
		  }else{
			  $error = 1;
		  }
		  
		  
	  }
	  

?> 


<!DOCTYPE html>

<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>START SITE - LOGIN</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>


  <body class="bg-dark">
	  
 

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">START SITE</div>
        <div class="card-body">
          <form action="login.php" method="post">
			<?php
			  if($error > 0){
				  
				  echo '<div class="form-group">
              <p class="text-danger">Usuário ou Senha inválido! Tente novamente ou entre em contato com o <a href="mailto:lucasrondon.com.br">Desenvolvedor</a>.</p>
            </div> ';
				  
			  }  

			?>  
			 
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Login" required="required" autofocus="autofocus">
                <label for="usuario">Login</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required="required">
                <label for="senha">Senha</label>
              </div>
            </div>
			  <button class="btn btn-primary btn-block" type="submit">Acessar</button>
            
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
