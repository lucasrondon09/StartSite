
<?php
//Função de rertorno de edição de registro
function mensagem($execQuery, $pagina){
if($execQuery){
	
	$msg = '<div class="alert alert-success" role="alert">Registro alterado com sucesso!</div>';
	
}else{
	
	$msg = '<div class="alert alert-danger" role="alert">Houve uma falha no processo, verifique!</div>';
	exit();
}

$ret = '<div id="content-wrapper">
        <div class="container-fluid">'.$msg.'
		  <a href="'.$pagina.'" class="btn btn-primary">Voltar</a>
        </div>';
	
	return($ret);
}


function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

?>


