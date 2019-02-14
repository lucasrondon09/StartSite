<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php

$idgaleria 	= $_POST['idgaleria'];
$titulo	 	= $_POST['titulo'];
$arquivo 	= $_FILES['arquivo'];
$arquivoName= $_FILES['arquivo']['name'];
$img		= reArrayFiles($arquivo);
//print_r($img);
$pagina		= "galeria.php";


$query = mysql_query("select titulo from galeria where idgaleria =".$idgaleria);

if($query){
	
	$res = mysql_fetch_array($query);
	$tituloGaleria = $res['titulo'];
}

if(!empty($arquivoName)){
	
foreach($arquivoName as $val){
	
	$extensao = strtolower(end(explode('.',$val)));
	
	// Array com as extensões permitidas
	$_UP['extensoes'] = array('jpg', 'png', 'gif');

	// Array com os tipos de erros de upload do PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite!';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado!';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente!';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo!';

	if(array_search($extensao, $_UP['extensoes'])=== false){
		echo "<div class='alert alert-danger' role='alert'><b>Erro!</b> Houve um problema com a extensão da imagem, envie arquivos com as seguintes extensões: jpg, png ou gif!</div>";

		exit();
		
	}
	
}	
	

	
foreach($img as $value){
	

	
// Nome da imagem
$dir = 'galeria/';
$newname = date('YmdHis',time()).mt_rand().'.jpg';

	$move_img = move_uploaded_file($value['tmp_name'], $dir.$newname);
	if($move_img){
			
		$query = "insert into galeria_itens (galeriaid, titulo, arquivo, st) values (".$idgaleria.", '".$titulo."', '".$newname."', 1)";
		
		$execQuery = mysql_query($query);
		
		$msg = mensagem($execQuery,$pagina);
		
		
		
	}else{
		
		echo "<div class='alert alert-danger' role='alert'><b>Erro!</b> Houve um problema com ao fazer upload da imagem, verifique!</div>";
		exit();
		
	}

	
	
	
}
	
	echo $msg;
	
}


?>

<?php include "footer.php"?>
