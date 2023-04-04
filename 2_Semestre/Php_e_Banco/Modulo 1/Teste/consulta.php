<?php

require_once 'config.php';

function obterAlunos() {
    global $dsn, $user, $pass;
    $alunos = [];
    // Inicia a variável $pdo com valor null para evitar erros de escopo.
$pdo = null;
    
    try {                                  // Diz que CASO tenha um erro tenta trata-lo                 
        $pdo = new PDO ($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $sql = "SELECT * FROM alunos";
        $stm = $pdo -> prepare($sql);
        $stm->execute();
        $alunos = $stm->fetchAll(PDO::FETCH_OBJ);

    } catch (PDOException $e){
        $alunos = [];

    } finally {
        if ($pdo) {
            $pdo = null; // Boa prática, fechar a conexão com o banco
        }
    }
    return $alunos;
}
 
?>