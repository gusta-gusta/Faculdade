<?php
//(PDO::ATTR_PERSISTENT => true)) consiste em não encerrar uma conexão aberta com o SGBD ao final de execução de um script. Com isso, é possível fazer cache da conexão e reutilizá-la quando outros scripts requisitarem uma conexão semelhante (com as mesmas credenciais) a essa que ficou aberta.

try {

	$dsn = new PDO("pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD, array(PDO::ATTR_PERSISTENT => true)) ;

} catch (PDOException $e) {
	echo 'A conexão falhou e retornou a seguinte mensagem de erro: ' .$e->getMessage();
}