<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$idcontatos = $_GET['id'];
	
$query = "select * from contatos where idcontatos =".$idcontatos;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res = mysql_fetch_array($execQuery);
	$titulo = $res['titulo'];
	$contatos = $res['contato'];
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Contatos</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Editar</div>
            <div class="card-body">
              <form action="contatos_editar_action.php" method="post">
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo?>">
					<input type="text" hidden="hidden" id="idcontato" name="idcontato" value="<?php echo $idcontatos?>">
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Contatos</label>
					<input type="text" class="form-control" id="contato" name="contato" value="<?php echo $contatos?>">
				  </div>
				  <a href="contatos.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
