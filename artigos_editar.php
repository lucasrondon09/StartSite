<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$idartigos = $_GET['id'];
	
$query = "select * from artigos where idartigos =".$idartigos;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res = mysql_fetch_array($execQuery);
	$titulo = $res['titulo'];
	$subtitulo = $res['subtitulo'];
	$posicao = $res['posicao'];
	$artigo = $res['artigo'];
	
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Artigos</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Editar</div>
            <div class="card-body">
              <form action="artigos_editar_action.php" method="post">
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo?>">
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Subtitulo</label>
					<input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?php echo $subtitulo?>">
				  </div>
				  <div class="form-group">
					<label for="posicao">Posição</label>
					<input type="number" class="form-control" id="posicao" name="posicao" value="<?php echo $posicao?>">
				  </div>
				  <div class="form-group">
					<label for="artigo">Artigo</label>
					  <textarea rows="6" class="form-control" id="artigo" name="artigo"><?php echo $artigo?></textarea>
				  </div>
				  <a href="artigos.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
