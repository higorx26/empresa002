<?php

    require_once '../model/DTO/empresaDTO.php';
    require_once '../model/DAO/empresaDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_POST['idAlterar'])){

        $id = $_POST['idAlterar'];

        $empresaDAO = new EmpresaDAO($conexao);
        $empresaDAO->consultarId($id);

        $empresaDTO = new EmpresaDTO();
        $empresaDTO->__setCnpj($_POST['cnpj']);
        $empresaDTO->__setRazaosocial($_POST['razaosocial']);
        $empresaDTO->__setEndereco($_POST['endereco']);
        $empresaDTO->__setBairro($_POST['bairro']);
        $empresaDTO->__setCep($_POST['cep']);
        $empresaDTO->__setSituacao($_POST['situacao
']);
    
       $empresaDAO->alterarEmpresa($empresaDTO, $id);
    }
    header("Location: ../view/consultarempresa.php");
?>