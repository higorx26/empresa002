<?php
    //CadastrarProdutoControl checked!!
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['btnCadastrar']){
            $produtoDTO = new ProdutoDTO();
            $produtoDTO->__setMatricula($_POST['matricula']);
            $produtoDTO->__setNome($_POST['nome']);
            $produtoDTO->__setTelefone($_POST['telefone']);
            $produtoDTO->__setEndereco($_POST['endereco']);
            $produtoDTO->__setEmail($_POST['email']);
            $produtoDTO->__setCurso($_POST['curso']);
            
            $produtoDAO = new ProdutoDAO($conexao);
            $produtoDAO->cadastrarAluno($produtoDTO);
        }

        header("Location: ../view/consultarAluno.php");
        exit();
    }

   


?>