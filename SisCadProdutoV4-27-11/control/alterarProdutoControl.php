<?php
    //AlterarProdutoControl checked!!
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_POST['matriculaAlterar'])){

        $matricula = $_POST['matriculaAlterar'];

        $produtoDAO = new ProdutoDAO($conexao);
        //$produtoDAO->consultarMatricula($matricula);

        $produtoDTO = new ProdutoDTO();
        $produtoDTO->__setNome($_POST['nome']);
        $produtoDTO->__setTelefone($_POST['telefone']);
        $produtoDTO->__setEndereco($_POST['endereco']);
        $produtoDTO->__setEmail($_POST['email']);
        $produtoDTO->__setCurso($_POST['curso']);
    
       $produtoDAO->alterarAluno($produtoDTO, $matricula);
    }

    header("Location: ../view/consultarAluno.php");
?>