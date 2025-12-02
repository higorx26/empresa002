<?php
    require_once '../model/DTO/empresaDTO.php';
    require_once '../model/DAO/empresaDAO.php';
    require_once '../model/DAO/conexao.php';

    $empresaDTO = new EmpresaDTO();
    $empresaDAO = new EmpresaDAO($conexao);
    $empresaDAO->consultarEmpresa($empresaDTO);
    
?>