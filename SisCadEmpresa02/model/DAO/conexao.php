<?php     
               
        $dsn = "mysql:host=localhost;dbname=juntacomercial";
        $usuario = "root";
        $senha = "";

        try{
            $conexao = new PDO($dsn , $usuario, $senha);
            
            //echo "Conexão Realizada com Sucesso!!!!!";
        }catch (PDOException $erro){
            echo "Não foi possível se conectar com o banco de dados: ".$erro->getMessage();
        }
    
?><?php
$dsn = "mysql:host=localhost;dbname=Juntacomercial";
$usuario = "root";
$senha = "root";

try {
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexao;
} catch (PDOException $e) {
    echo "Não foi possível conectar com o banco de dados: " . $e->getMessage();
    exit();
}