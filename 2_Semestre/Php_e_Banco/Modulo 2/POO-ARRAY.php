<html>
    <body>
        <?php

        require_once 'pessoa.php';
        require_once 'profissional.php';

        $pessoas = [ new Pessoa("Gustavo", 18), new Profissional("3S Rodrigues", 18, "Desenvolvedor"), new Pessoa("Lorenna", 18)];

        foreach($pessoas as $p){
        $p->exibirDados();
        }
?>  
    </body>
</html>