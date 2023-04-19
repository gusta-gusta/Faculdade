<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'escola');
define('USER', 'root');
define('PASSWORD', '(Ap@ch3)!1)');

//Conectando com o Servidor
$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die( ' Não foi possível conectar.' );

//Realizando uma consulta no BD
$instrucaoSQL = "Select matricula, nome, entrada From Alunos";
$stmt = mysqli_prepare($conn, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $matricula, $nome, $entrada);
mysqli_stmt_execute($stmt);

while (mysqli_stmt_fetch($stmt)) {
	echo $matricula . "\t";
	echo $nome . "\t";
	echo $entrada . "\n";
}

//Encerrando a conexão
mysqli_close($conn);