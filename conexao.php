<?php



$link = mysql_connect('localhost', 'root', '');
//$link = mysql_connect('mysharedhost0135.locaweb.com.br', 'sesimt5', 'H7g3S9Nw5k');

if (!$link) {
    die('Nao foi possivel conectar: ' . mysql_error());
}

//$db = mysql_select_db('sesimt5');
$db = mysql_select_db('admin-site');
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');



if (!$db) {
    die('Nao foi encontrado o banco de dados em questao: ' . mysql_error());
}

?>