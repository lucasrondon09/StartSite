<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$idgaleria = $_GET['id'];
	
$query = "select * from galeria where idgaleria =".$idgaleria;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res 		= mysql_fetch_array($execQuery);
	$idgaleria 	= $res['idgaleria'];
	$titulo 	= $res['titulo'];
	$descricao 	= $res['descricao'];
	$capa	 	= $res['capa'];
	$dir		= "galeria/".$capa;
	
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Galeria</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Editar</div>
            <div class="card-body">
              <form action="imagens_editar_action.php" method="post" enctype="multipart/form-data">
				  <div class="row">
				  <div class="col-xs-6 col-md-3">
					<a href="<?php echo $dir;?>" class="thumbnail">
					  <img src="<?php echo $dir;?>" class="img-thumbnail">
					</a>
				  </div>
				  <div class="col-xs-6 col-md-9">
					  <h1>Capa da Galeria</h1>
					  	<p><i>Obs: Essa imagem será utilizada na capa da galeria. Utilize as dimensões acima.</i></p>
					  	<p><input type="file" id="arquivo" name="arquivo"></p>
				  </div>
				  </div>	
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo?>">
					<input type="text" hidden="hidden" id="idimagem" name="idimagem" value="<?php echo $idgaleria?>">  
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Descrição</label>
					<input type="text" class="form-control" id="subtitulo" name="descricao" value="<?php echo $descricao?>">
				  </div>
				  <a href="galeria.php" class="btn btn-primary">Voltar</a>
				  <a href="galeria_excluir.php" class="btn btn-danger">Deletar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
