<?php 

// Constantes para armazenamento das variáveis de conhexão.
define('HOST', 'localhost');
define('PORT', '3030');
define('DBNAME', 'exercicio');
define('USER', 'root');
define('PASSWORD','');

try{
    //Conexão MySQL
    $dsn = new PDO("mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
    echo 'A conexão falhou : '. $e->getMessage();
}
