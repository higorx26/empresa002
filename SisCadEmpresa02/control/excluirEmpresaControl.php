<?php

    require_once '../model/DTO/empresaDTO.php';
    require_once '../model/DAO/empresaDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_GET['id'])){

        $id = $_GET['id'];

        $empresaDAO = new EmpresaDAO($conexao);
        $empresaDAO->excluirEmpresa( $id);
    }
     header("Location: ../view/consultarEmpresa.php");
?>