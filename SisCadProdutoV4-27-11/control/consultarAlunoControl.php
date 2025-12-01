<?php
    //ConsultarProdutoControl checked!!
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    require_once '../model/DAO/conexao.php';

    $produtoDTO = new ProdutoDTO();
    $produtoDAO = new ProdutoDAO($conexao);
    $produtoDAO->consultarAluno($produtoDTO);
    
?>