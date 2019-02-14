<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$idimagem = $_GET['id'];
	
$query = "select * from imagens where idimagens =".$idimagem;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res 		= mysql_fetch_array($execQuery);
	$idimagens 	= $res['idimagens'];
	$titulo 	= $res['titulo'];
	$descricao 	= $res['descricao'];
	$arquivo 	= $res['arquivo'];
	$alt 		= $res['alt'];
	$tamanho 	= $res['tamanho'];
	$posicao 	= $res['posicao'];
	
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
              <form action="imagens_editar_action.php" method="post" enctype="multipart/form-data">
				  <div class="row">
				  <div class="col-xs-6 col-md-3">
					<a href="imagens/<?php echo $arquivo?>" class="thumbnail">
					  <img src="imagens/<?php echo $arquivo?>" class="img-thumbnail">
					</a>
				  </div>
				  <div class="col-xs-6 col-md-9">
						<h1><?php echo $tamanho?></h1><br>
					  	<p><i>Obs: Sempre fazer upload de imagem neste mesmo tamanho para não desconfigurar o site.</i></p>
					  	<input type="file" id="arquivo" name="arquivo">
				  </div>
				</div>
					
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo?>">
					<input type="text" hidden="hidden" id="idimagem" name="idimagem" value="<?php echo $idimagens?>">  
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Descrição</label>
					<input type="text" class="form-control" id="subtitulo" name="descricao" value="<?php echo $descricao?>">
				  </div>
				  <div class="form-group">
					<label for="artigo">Legenda</label>
					  <input type="text" class="form-control" id="alt" name="alt" value="<?php echo $alt?>">
				  </div>
				  <div class="form-group">
					<label for="posicao">Posicao</label>
					  <input type="number" class="form-control" id="posicao" name="posicao" value="<?php echo $posicao?>">
				  </div>
				  <a href="imagens.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
