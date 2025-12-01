<?php
    //ProdutoDAO checked!!
    require_once 'conexao.php';
    
    class ProdutoDAO{
        public $conexao;

        public function __construct($conexao){
           $this->conexao = $conexao;
        }

        public function cadastrarAluno($produtoDTO){
            
            try{
                $sql = 'INSERT INTO aluno (matricula , nome , telefone , endereco , email , curso) VALUES (:matricula, :nome , :telefone , :endereco , :email , :curso)';
            
                $insert = $this->conexao->prepare($sql);

                $matricula = $produtoDTO->__getMatricula();
                $nome = $produtoDTO->__getNome();
                $telefone = $produtoDTO->__getTelefone();
                $endereco = $produtoDTO->__getEndereco();
                $email = $produtoDTO->__getEmail();
                $curso = $produtoDTO->__getCurso();
                
                $insert->bindValue(":matricula",$matricula);
                $insert->bindValue(":nome",$nome);
                $insert->bindValue(":telefone",$telefone);
                $insert->bindValue(":endereco",$endereco);
                $insert->bindValue(":email",$email);
                $insert->bindValue(":curso",$curso);

                if($insert->execute()){
                    echo "Produto Cadastrado com Sucesso!!!!!";
                }else{
                    echo "Erro ao Cadastrar Produto!!!!!";
                }

            }catch (PDOException $erro){
                echo "Erro ao cadastrar aluno: " . $erro->getMessage();
            }
            
        }
        
        public function consultarAluno($produtoDTO){
            try{

                $sql = 'SELECT * FROM aluno';
                $consulta = $this->conexao->prepare($sql);
                if($consulta->execute()){
                    if($consulta->rowcount() > 0){
                        $listaAlunos = $consulta->fetchAll();
                        $produtoDTO->__setListaAlunos($listaAlunos);
                    }
                }else{
                    echo "Erro ao Consultar Alunos!!!!!";
                }

            }catch(PDOException $erro){

            }

        }

        public function consultarMatricula(int $matricula){
            include_once '../model/DTO/ProdutoDTO.php';
        
            $sql = 'SELECT * FROM aluno WHERE matricula = :matricula';
            $consultaMatricula = $this->conexao->prepare($sql);
            $consultaMatricula->bindValue(":matricula",$matricula);
            $consultaMatricula->execute();
        
            return $consultaMatricula->fetchObject("ProdutoDTO");
        }

        public function excluirAluno($matricula){
            try{

                $sql = 'DELETE FROM aluno WHERE matricula = :matricula';
                $delete = $this->conexao->prepare($sql);
                $delete->bindValue(":matricula",$matricula);
                $delete->execute();

            }catch(PDOException){

            }
        }

         public function alterarAluno($produtoDTO, $matricula){
            try{

                $sql = 'UPDATE aluno SET nome=:nome, telefone=:telefone, endereco=:endereco, email=:email, curso=:curso WHERE matricula=:matricula';
                $altera = $this->conexao->prepare($sql);

                $nome = $produtoDTO->__getNome();
                $telefone = $produtoDTO->__getTelefone();
                $endereco = $produtoDTO->__getEndereco();
                $email = $produtoDTO->__getEmail();
                $curso = $produtoDTO->__getCurso();
                
                $altera->bindValue(":matricula",$matricula);
                $altera->bindValue(":nome",$nome);
                $altera->bindValue(":telefone",$telefone);
                $altera->bindValue(":endereco",$endereco);
                $altera->bindValue(":email",$email);
                $altera->bindValue(":curso",$curso);

                return $altera->execute();

            }catch(PDOException $erro){
                echo "Erro ao alterar aluno: " . $erro->getMessage();
                return false;
            }
        }

       
        
    }
?>