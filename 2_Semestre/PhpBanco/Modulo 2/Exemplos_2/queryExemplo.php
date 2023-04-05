<?php

//                                                          QUERY            


$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
//a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD
$resultSet = $dsn->query($sql);
while ($row = $resultSet->fetch()) {
  echo $row['nome'] . "\t";
  echo $row['cpf'] . "\t";
  echo $row['telefone'] . "\n";
}


/*

Perceba que, como o método retorna um objeto, é possível acessar seus índices na forma de índices de array. Para isso, foi utilizado o método fetch, um laço while que percorreu o result set retornado, imprimindo os dados selecionados.

A respeito do método fetch, que retorna um resultset no formato de array numérico e associativo, há ainda outros disponíveis: o fetchAll, fetchColumn e fetchObject. Além disso, esse método pode receber como parâmetro o tipo de retorno, ou seja, se deverá retornar um array associativo, numérico, associativo e numérico (que é o seu padrão por omissão), entre outros. 

*/