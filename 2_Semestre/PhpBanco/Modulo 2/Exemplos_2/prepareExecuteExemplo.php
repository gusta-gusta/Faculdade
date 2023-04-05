<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('PORT', '5432');
define('DBNAME', 'test');
define('USER', 'user');
define('PASSWORD', 'psswd');

try {
	$dsn = new PDO("mysql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}

//Realizando uma consulta no BD através do login e senha recebidos por POST
$login = $_POST['login'];
$pswd = $_POST['pswd'];

$stmt = $dsn->prepare("Select * From Usuario Where login = :login And password =:password");
$stmt->execute([':login' => $login, ':password' => $pswd]);

/*Aqui entraria o código para tratar o resultado da instrução SQL acima*/


//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;

//Repare no código que o método Prepare recebe como parâmetro a instrução SQL a ser executada e que, nos lugares onde seriam utilizadas as variáveis PHP com os valores provenientes do formulário HTML, são usadas outras variáveis, chamadas parâmetros nomeados (named parameters). 




//O método Execute faz o vínculo (bind) entre os named parameters e as variáveis PHP. O mesmo código apresentado anteriormente poderia ser executado tendo o sinal de interrogação “?” no lugar dos parâmetros nomeados. Veja, a seguir, como ficaria esse fragmento de código:

$stmt = $dsn->prepare("Select * From Usuario Where login = ? And password = ?");
$stmt->execute([$login, $pswd]);

//...