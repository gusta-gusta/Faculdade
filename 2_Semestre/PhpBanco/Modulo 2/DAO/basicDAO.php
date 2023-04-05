<?php

require_once "config.php";

class BasicDAO{       // base para os outros DAO                              
    protected function execDML ($sql, ...$params){ // ... valores seguidos por virgula ,,,   qualquer valor     
        global $dsn, $user, $pass;
        $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        try{
            $stm = $pdo->prepare($sql);
            $stm->execute($params);
        }finally{
            $pdo = null;
        }
    }

    protected function execQUERY($sql){
        global $dsn, $user, $pass;
        $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $objetos = $stm->fetchAll(PDO::FETCH_OBJ); // Pega tudo que veio do Banco e transforma em Objetos
        $pdo = null;
        return $objetos;

    }
}

?>
