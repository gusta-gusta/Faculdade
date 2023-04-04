<?php
session_start(); // Inicia a sessão
$erro=""; // Inicia sem Erro 
if(!isset($_POST["login"])or($_POST["login"]=="")) // Se !NÃO exisitir ou estiver vazio faça
    $erro = "Preencha o login"; 
elseif
    (!isset($_POST["senha"])or($_POST["senha"]=="")) // Se !NÃO exisitir ou estiver vazio faça  
    $erro = "Preencha a senha";
else{
    $login=$_POST["login"]; // Pega o Login puxando pelo POST
    $senha=$_POST["senha"]; // Pega a Senha puxando pelo POST
    if($login!="admin" or $senha!="1234mudar%"){ // Apenas de exemplo. Se Senha ou Login for diferente faça
        $erro="Login ou senha invalido(s)"; 
    }
else {
    $_SESSION["usuario"] = "Admin"; // Coloquei na sessão este usuário
    }
}

if($erro!="") // Se erro diferente de vazio é porque houve um erro
    header("Location: form_login.php?erro=$erro", true,301); // Redirecione esse erro para form_login passando em GET na url o erro 
else
    header("Location: AreaRestrita.php",true,301); // Redireciona para página restrita tendo um usuário na sessão
?> 


