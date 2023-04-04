<?php
session_start();
if(!isset($_SESSION["usuario"])) // Se NÃO ! tiver usuário na sessão faça 
    header ("Location: form_login.php", true, 301); // Redireciona para form_login.php 
    else{ // Se estiver Logado faça
        ?>
        <html><body>
                <h1>Olá <?php echo ($_SESSION["usuario"]) ?></h1> <!-- Usuário logado mostra a página -->
                <h2><a href="index.php">retornar </h2>
    </body></html>
    <?php
    }

    ?>