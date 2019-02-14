<?php include "conexao.php"?>
<?php include "header.php"?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Imagens</a>
            </li>
            <li class="breadcrumb-item active">Visualizar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Visualizar</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Titulo</th>
                      <th>Descrição</th>
					  <th>Tamanho</th>
					  <th>Posicao</th>
					  <th></th>		
                    </tr>
                  </thead>
                  
                    
					<?php
						$query = "select * from imagens where st > 0";
						$execQuery = mysql_query($query);
						$numQuery = mysql_num_rows($execQuery);
						if($numQuery > 0){
							
							while($res = mysql_fetch_array($execQuery)){
								$id			= $res["idimagens"];
								$titulo 	= $res["titulo"];
								$descricao 	= $res["descricao"];
								$arquivo 	= $res["arquivo"];
								$alt 		= $res["alt"];
								$tamanho 	= $res["tamanho"];
								$posicao 	= $res["posicao"];
								$data 		= date('d-m-Y', strtotime( $res["datamod"]));
								
								echo '<tbody>
								<tr>
								  <td width=150px><img src=imagens/'.$arquivo.' alt='.$alt.' width= 150px;></td>
								  <td>'.$titulo.'</td>
								  <td>'.$descricao.'</td>
								  <td>'.$tamanho.'</td>
								  <td>'.$posicao.'</td>
								  <td class="text-center">
								  		<a href="imagens_editar.php?id='.$id.'" class="btn btn-primary"><i class="fas fa-pen"></i></a>		
								  </td>
								  </tr></tbody>
								';
							}
						}

					?>
                      
                    
                  
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
