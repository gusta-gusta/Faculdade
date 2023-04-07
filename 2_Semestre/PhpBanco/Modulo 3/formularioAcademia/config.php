<?php 

/***CONEXÃO COM O BD ***/
//Constantes para armazenamento das variáveis de conexão.
define('HOST', 'localhost');
define('PORT', '3030');
define('DBNAME', 'academia');
define('USER', 'root');
define('PASSWORD', '');

try {
	$dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}
/*** FIM DOS CÓDIGOS DE CONEXÃO COM O BD ***/

?>