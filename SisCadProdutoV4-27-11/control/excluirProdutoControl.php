<?php
    //ExcluirProdutoControl checked!!
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_GET['matricula'])){

        $matricula = $_GET['matricula'];

        $produtoDAO = new ProdutoDAO($conexao);
        $produtoDAO->excluirAluno( $matricula);
    }
     header("Location: ../view/consultarAluno.php");
?>