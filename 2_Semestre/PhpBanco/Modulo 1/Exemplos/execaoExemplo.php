<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('PORT', '3030');
define('DBNAME', 'estacio');
define('USER', 'user');
define('PASSWORD', '1234mudar%');

try {
	$dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .$e->getMessage();
}


//...
$dsn = null;

echo "Conexão Encerrada Sr Gusta";