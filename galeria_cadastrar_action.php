<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php


$titulo	 	= $_POST['titulo'];
$descricao 	= $_POST['descricao'];
$arquivo 	= $_FILES['arquivo'];
$arquivoName= $_FILES['arquivo']['name'];
$pagina		= "galeria.php";


if(!empty($arquivoName)){
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'gif');

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
  die("<div class='alert alert-danger' role='alert'><b>Não foi possível fazer o upload, erro:</b>" . $_UP['erros'][$_FILES['arquivo']['error']]."</div>");
  exit; // Para a execução do script
}
	
$dir = mkdir("imagens/galeria/".$titulo) or die("<div class='alert alert-danger' role='alert'><b>Não foi possível criar uma pasta com o título informado, verifique!</b>");

	

// Nome da imagem
$nome_final_img = 'galeria/'.$arquivoName;

// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $arquivoName)));


if(array_search($extensao, $_UP['extensoes'])=== false){
	echo "<div class='alert alert-danger' role='alert'><b>Erro!</b> Houve um problema com a extenção da imagem, envie arquivos com as seguintes extensões: jpg, png ou gif!</div>";
	exit();

}else{
	$move_img = move_uploaded_file($_FILES['arquivo']['tmp_name'], $nome_final_img);
	
	$query = "insert into galeria (titulo,descricao,capa,st) values ('".$titulo."','".$descricao."','".$arquivoName."',1)";
	$execQuery = mysql_query($query);

	$msg = mensagem($execQuery,$pagina);
	
	
	}

//Fim upload da imagem
}


	



echo $msg;


?>		  
<?php include "footer.php"?>
