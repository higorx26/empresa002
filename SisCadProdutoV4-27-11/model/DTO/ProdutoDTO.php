<?php
require_once '../model/DAO/EmpresaDAO.php';
require_once '../model/DAO/conexao.php';

class EmpresaDTO {
    private $matricula;
    private $nome;
    private $telefone;
    private $endereco;
    private $email;
    private $curso;
    private $listaAlunos;

    public function __construct(){}

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

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getListaAlunos(){
        return $this->listaAlunos;
    }

    public function setListaAlunos($listaAlunos){
        $this->listaAlunos = $listaAlunos;
    }

    //Cadastrar aluno pela Empresa (mantive sua lógica)
    public function cadastrarAluno(){
        $conexao = Conexao::conectar();
        $empresaDAO = new EmpresaDAO($conexao);
        $empresaDAO->cadastrarAluno($this);
    }
}
?>
