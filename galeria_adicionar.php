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
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Galeria - Fotos</a>
            </li>
            <li class="breadcrumb-item active">Adicionar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Adicionar</div>
			  
            <div class="card-body">
              <form action="galeria_adicionar_action.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
					  <h1><?php echo $titulo?></h1>
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo">
					<input type="text" hidden="hidden" id="idgaleria" name="idgaleria" value="<?php echo $idgaleria?>">  
				  </div>
				  <div class="form-group">
					<label for="fotos">Fotos</label>
					<p><input type="file" id="arquivo" name="arquivo[]" multiple="multiple"></p>  
				  </div>
				  <a href="galeria.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>	
		  <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Fotos Cadastradas</div>
			  
            <div class="card-body">
				
				<div class="row">
				<?php
				$dir= 'galeria/';
				$queryItens = "select * from galeria_itens where galeriaid =".$idgaleria." and st > 0";
				$execQueryItens = mysql_query($queryItens);
				$rowsQueryItens = mysql_num_rows($execQueryItens);

				if($rowsQueryItens > 0){
					
					while($result = mysql_fetch_array($execQueryItens)){
					
					$idgaleria_itens 	= $result['idgaleria_itens'];
					$titulo_itens		= $result['titulo'];
					$arquivo_itens		= $result['arquivo'];
					//$data_itens			= date('d-m-Y', strtotime($result['data']));
						
					echo '
					
					<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
					  <img class="img-thumbnail" src="'.$dir.$arquivo_itens.'">
					  <div class="caption">
						<h6>'.$titulo_itens.'</h6>
						<p><a href="#" class="btn btn-danger" role="button">Excluir</a> <a href="#" class="btn btn-info" role="button">Editar</a></p>
					  </div>
					</div>
				  </div>
					
					';	
					

					}
					
				}	
		
		?>		
				  
				</div>		
            </div>
          </div>	

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
