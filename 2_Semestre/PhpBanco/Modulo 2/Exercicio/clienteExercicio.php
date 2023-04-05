<?php
require_once 'configExercicio.php';


/*
$nome_cliente               = "Gusta";
$cpf_cliente                =  41395890862;
$email_cliente              = "gustavo_sales2014@outlook.com";
$data_nascimento_cliente    = "2001-11-13";

//::::::::::::::::::::::::::::::::::::::::::::::::::::::INSERT INTO :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$stmt = $dsn->prepare("INSERT INTO cliente(nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente) VALUES (?, ?, ?, ?)"); //Prepara para inserir no banco

$resultInsert = $stmt->execute([$nome_cliente, $cpf_cliente, $email_cliente, $data_nascimento_cliente]); // retorna com execute true ou false se foram enviados ao banco essas variaveis

if($resultInsert){
    echo "Os dados foram inseridos com sucesso. \n\n";
}else{
    echo "Ocorreu um erro e não foi possível inserir os dados.";
    exit;
}

die;





//:::::::::::::::::::::::::::::::::::::::::::: SELECT :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
$instrucaoSQL = "Select id_cliente, nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente From cliente"; // Seleciona as colunas da tabela

$resultSelect = $dsn->query($instrucaoSQL); // Metodo query para executar o select

while ($row = $resultSelect->fetch()){ // Trata o resultado da query armazenado no $resultSelect com o metodo fetch que retorna linha a linha
    echo $row['id_cliente'] . "\t";
    echo $row['nome_cliente'] . "\t";
    echo $row['cpf_cliente'] . "\t";
    echo $row['email_cliente'] . "\t";
    echo $row['data_nascimento_cliente'] . "\t";
}

die;
*/

//:::::::::::::::::::::::::::::::::::::::::::::::::: UPDATE ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 
/*

$nome_cliente               = "Gusta Sales Rodrigues";
$cpf_cliente                = "41395890862";
$email_cliente              = "gustavo_sales2014@outlook.com";
$data_nascimento_cliente    = "2001-11-13";
$id_cliente                 = 1;



$stmt = $dsn->prepare("UPDATE 
                            cliente 
                        SET nome_cliente = ?,
                            cpf_cliente = ?,
                            email_cliente = ?,
                            data_nascimento_cliente = ? 
                        WHERE 
                            id_cliente = ?");


$resultUpdate = $stmt->execute([$nome_cliente, $cpf_cliente, $email_cliente, $data_nascimento_cliente, $id_cliente]); // retorna com execute true ou false se foram enviados ao banco essas variaveis

if ($resultUpdate) {
    echo "Atualizado com Sucesso!. \n\n";
} else {
    echo "Erro, não foi possível atualizar.";
    exit;
}

$instrucaoSQL = "Select id_cliente, nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente From cliente"; // Seleciona as colunas da tabela

$resultUpdate = $dsn->query($instrucaoSQL); // Metodo query para executar o select

print_r($resultUpdate->fetchAll(PDO::FETCH_ASSOC));// Metodo fetchAll = Devolve todas as linhas do resultado retornado como um array print_r
                                                   // Parametro FETCH_ASSOC = quer que os indices sejam associativos 
die;
*/
//:::::::::::::::::::::::::::::::::::::::::::::::::: DELETE ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: 


$id_cliente = 3;
$stmt = $dsn->prepare("DELETE FROM cliente WHERE id_cliente = ?"); // prepara para deletar from cliente
$resultDelete = $stmt->execute([$id_cliente]); // retorna com execute true ou false se foram enviados ao banco essas variaveis

if($resultDelete){
    echo "Os dados foram removidos com sucesso!";
}else{
    echo "Erro, não foi possível remover os dados";
    exit;
}


$instrucaoSQL = "Select id_cliente, nome_cliente, cpf_cliente, email_cliente, data_nascimento_cliente From cliente"; // Seleciona as colunas da tabela

$resultDelete = $dsn->query($instrucaoSQL); // Metodo query para executar o select

print_r($resultDelete->fetchAll(PDO::FETCH_ASSOC));// Metodo fetchAll = Devolve todas as linhas do resultado retornado como um array print_r
                                                   // Parametro FETCH_ASSOC = quer que os indices sejam associativos 
die;







?>