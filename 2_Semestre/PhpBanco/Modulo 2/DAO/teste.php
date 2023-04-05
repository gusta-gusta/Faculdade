<html>
    <body>
        <ul>
            <?php

                require_once 'alunoDAO.php';

                $dao = new AlunoDAO();
                $aluno = new Aluno("2022", "ZEZINHO DE OLIVEIRA", 2022);        
                $dao->inserir($aluno);
                foreach($dao->obterTodos() as $aluno)
                    echo("<li> $aluno->matricula :: $aluno->nome</li>");

            ?>
        </ul>
    </body>
</html>