
<?php 
session_start();
include "conexao.php";
include "header.php";
?>

      <div id="content-wrapper">

        <div class="container-fluid">
			<?php 
				$usuarioId 		= $_SESSION['UsuarioID'];
				$usuarioNome 	= $_SESSION['UsuarioNome'];		
			?>

          
			
			<div class="jumbotron">
			  <h1>Bem vindo, <?php echo $usuarioNome;?>!</h1>
			  <p>Acesse o MENU lateral para acessasr as funcionalidades do seu site. <br />Em caso de dúvidas, entre em contato com o <a href="desenvolvedor.php">Desenvolvedor!</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Acessar Site</a></p>
			</div>

          

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
