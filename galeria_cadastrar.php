<?php include "conexao.php"?>
<?php include "header.php"?>


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
              Cadastrar</div>
            <div class="card-body">
              <form action="galeria_cadastrar_action.php" method="post" enctype="multipart/form-data">
				  <div class="row">
				  <div class="col-xs-6 col-md-9">
					  	<label for="titulo">Capa da Galeria</label>
					  	<p><i>Obs: Siga as orientações de dimensões do seu site.</i></p>
					  	<p>
					  	<input type="file" id="arquivo" name="arquivo"></p>
					  	<p>
				  </div>
				</div>
					
				  <div class="form-group">
					<label for="titulo">Titulo</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="">  
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Descrição</label>
					<input type="text" class="form-control" id="descricao" name="descricao" value="">
				  </div>
				  <a href="galeria.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
