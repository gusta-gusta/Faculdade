<html><body>
    <ul>
        <?php

            require_once 'aluno.php';

            $dao = new AlunoDAO();
            $aluno = new Aluno("2022003W", "Gusta Sales", 2022);
            $dao->inserir($aluno);
            foreach($dao->obterTodos() as $aluno)
                echo("<li> $aluno->matricula :: $aluno->nome</li>");
            

            ?>
    </ul>
</body></html>