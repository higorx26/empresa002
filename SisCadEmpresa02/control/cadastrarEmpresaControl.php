<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../model/empresaDTO.php';
require_once '../model/empresaDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
    $razaoSocial = filter_input(INPUT_POST, 'razaoSocial', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);

    if (empty($cnpj) || empty($razaoSocial)) {
        echo "Preencha todos os campos obrigatórios!";
        exit();
    }

    $empresaDTO = new EmpresaDTO();
    $empresaDTO->setCnpj($cnpj);
    $empresaDTO->setRazaoSocial($razaoSocial);
    $empresaDTO->setEndereco($endereco);
    $empresaDTO->setBairro($bairro);
    $empresaDTO->setCep($cep);
    $empresaDTO->setSituacao($situacao);

    $empresaDAO = new EmpresaDAO();
    $sucesso = $empresaDAO->cadastrarEmpresa($empresaDTO);

    if ($sucesso) {
        header("Location: ../view/consultar.php?cadastro=sucesso");
        exit();
    } else {
        header("Location: ../view/cadastrar.php?cadastro=erro");
        exit();
    }
} else {
    header("Location: ../view/cadastrar.php");
    exit();
}