<html>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap#5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <body>
        <h1>Exemplo de POO</h1>
       
        <?php

            require_once 'pessoa.php';
            require_once 'profissional.php';
            require_once 'animal.php';

            $Pessoa1 = new Pessoa("Gustavo", 21);
            $Pessoa1->exibirDados();
            $Profissional1 = new Profissional("Lorenna", 18, "Designer");
            $Profissional1->exibirDados();

            $Animal1 = new Cachorro();
            $Animal1->emitirSom();
        ?>

    </body>
</html>