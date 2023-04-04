<html>
    <body>
        <h1>Login do usuario</h1>
        <?php 
        if (isset($_GET["erro"])) // Se o formulário der retorno de erro faça
            echo ("<hr/><h2>".$_GET['erro']."</h2><hr/>"); // Irá mostrar na tela o Erro 
            ?>

            <form action="login.php" method="post"> <!-- Chamada para o  login usando metodo POST -->
            <p>Login:<input type="text" name="login"/></p>
            <p>Senha:<input type="password" name="senha"/></p>
            <input type="submit" value="enviar"/>    
            </form>
    </body>
</html>