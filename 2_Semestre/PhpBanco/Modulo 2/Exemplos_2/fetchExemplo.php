<?php


//A respeito do método fetch, que retorna um resultset no formato de array numérico e associativo, há ainda outros disponíveis: o fetchAll, fetchColumn e fetchObject. Além disso, esse método pode receber como parâmetro o tipo de retorno, ou seja, se deverá retornar um array associativo, numérico, associativo e numérico (que é o seu padrão por omissão), entre outros. Veja o exemplo de sua utilização retornando um array associativo:





while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
  //...
}


