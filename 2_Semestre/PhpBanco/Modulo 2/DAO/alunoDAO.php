<?php

require_once 'basicDAO.php';

     class Aluno {

    public $matricula;
    public $nome;
    public $entrada;

    public function __construct($matricula = "", $nome = "", $entrada=0){

        $this->matricula= $matricula;
        $this->nome = $nome;
        $this->entrada = $entrada;
    }

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEntrada(){
        return $this->entrada;
    }
    public function setEntrada($entrada){
        $this-> entrada = $entrada;
    }
}
    class AlunoDAO extends basicDAO { // Gerenciar o Banco dos Alunos

        function obterTodos() {
            return parent::execQUERY("SELECT * FROM alunos"); // Retorna os Objetos do tipo Aluno

        }

        function inserir(Aluno $aluno){ // Só aceita objetos do tipo Aluno
            parent::execDML( "INSERT INTO ALUNOS VALUES (?,?,?)", $aluno->matricula, $aluno->nome, $aluno->entrada);
        } //                                                       (      ?      ,         ?      ,         ?      )
    }
?>