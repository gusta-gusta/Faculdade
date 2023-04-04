
<?php
session_start(); //Inicia sessão, inicia a utilização do recurso de sessão
$_SESSION = array(); // colocando um array zerado
session_destroy(); // removendo de definitivo qualquer restigio da sessão
header("Location: index.php", true, 301); // Redireciona para o index porém sem usuario na sessão, voltando do inicio
?>
