<?php include "conexao.php"?>
<?php include "header.php"?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Contatos</a>
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
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Contato</th>
                      <th>Data</th>
					  <th></th>		
                    </tr>
                  </thead>
                  
                    
					<?php
						$query = "select * from contatos where st > 0";
						$execQuery = mysql_query($query);
						$numQuery = mysql_num_rows($execQuery);
						if($numQuery > 0){
							
							while($res = mysql_fetch_array($execQuery)){
								$id			= $res["idcontatos"];
								$titulo 	= $res["titulo"];
								$contatos 	= $res["contato"];
								$data 		= date('d-m-Y', strtotime( $res["datamod"]));
								
								echo '<tbody>
								<tr>
								  <td>'.$id.'</td>
								  <td>'.$titulo.'</td>
								  <td>'.$contatos.'</td>
								  <td>'.$data.'</td>
								  <td class="text-center">
								  		<a href="contatos_editar.php?id='.$id.'" class="btn btn-primary"><i class="fas fa-pen"></i></a>		
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
