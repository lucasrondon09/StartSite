<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$iduser = $_SESSION['UsuarioID'];
	
$query = "select * from usuario where idusuario =".$iduser;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res = mysql_fetch_array($execQuery);
	$nome = $res['nome'];
	$login = $res['login'];
	
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Usuário</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Editar</div>
            <div class="card-body">
              <form action="usuarios_editar_action.php" method="post">
				  <div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome?>">
				  </div>
				  <div class="form-group">
					<label for="login">Login</label>
					<input type="text" class="form-control" id="login" name="login" value="<?php echo $login?>">
				  </div>
				  <a href="artigos.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
