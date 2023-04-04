<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de Login</h1>
    <h2><a href="AreaRestrita.php">Fazer Login</a></h2> <!-- ir para tela de login -->
    <hr/>
    <?php
    session_start(); // Iniciar Ambiente de Sessão (valores armazenados ao lado do servidor)
    if(isset($_SESSION["usuario"])){ // Se exite um usuário na sessão
        ?>
        <a href="logout.php">Sair</a> <!-- Se resultado positivo se existe um usuário logado -->
        <?php
    }
    ?>
</body>
</html> 