<?php

//                                                               EXEC 


/*a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD*/
$qtdeLinhasAfetadas = $dsn->exec("Delete From Cliente Where codigo_cliente = 1");
echo "Quantidade de linhas afetadas: " . $qtdeLinhasAfetadas


/*
 O código apresentado é funcional e complementar ao código demonstrado anteriormente, uma vez que o método Exec deve ser invocado a partir da instância para a Classe PDO (correspondente à variável $dsn em nosso código).

Em relação às linhas afetadas, tal informação é útil para confirmarmos se a operação foi executada com sucesso. Logo, podemos utilizar uma estrutura de decisão, como “if”, para verificar o conteúdo da variável $qtdeLinhasAfetadas. Caso nenhuma linha tenha sido afetada, será retornado 0 (zero). Além disso, Exec pode retornar ainda o booleano FALSE ou então “” (vazio).
 */
?>