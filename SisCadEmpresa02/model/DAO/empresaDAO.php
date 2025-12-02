<?php
require_once 'conexao.php';
require_once 'empresaDTO.php';

class EmpresaDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = require 'conexao.php';
    }

    public function cadastrarEmpresa(EmpresaDTO $empresaDTO) {
        try {
            $sql = "INSERT INTO empresa (cnpj, razaoSocial, endereco, bairro, cep, situacao) VALUES (?, ?, ?, ?, ?, ?)";
            
            $stmt = $this->conexao->prepare($sql);
            
            $stmt->bindValue(1, $empresaDTO->getCnpj());
            $stmt->bindValue(2, $empresaDTO->getRazaoSocial());
            $stmt->bindValue(3, $empresaDTO->getEndereco());
            $stmt->bindValue(4, $empresaDTO->getBairro());
            $stmt->bindValue(5, $empresaDTO->getCep());
            $stmt->bindValue(6, $empresaDTO->getSituacao());

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao cadastrar empresa: " . $e->getMessage();
            return false;
        }
    }
}