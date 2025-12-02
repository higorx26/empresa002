<?php
    include_once '../model/DAO/EmpresaDAO.php';
    include_once '../model/DAO/conexao.php';
    
    

    $empresaDAO = new EmpresaDAO($conexao);
    $edita = $empresaDAO->consultarId($_GET['id']);
    //var_dump($edita);
    //echo $edita['cnpj'];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarEmpresa.php">Cadastrar</a></li>
            <li><a href="consultarEmpresa.php">Consultar</a></li>
        </ul>

    </nav>
</header>

<h1>Alterar Empresa</h1>


<form method="POST" action="../control/alterarEmpresaControl.php">
    
    <input type="hidden" name="idAlterar" value="<?= $_GET['id']; ?>" />
    
    <label>Cnpj da Empresa: </label>    
    <input type="text" name="cnpj" value="<?= $edita->__getCnpj() ?>"/>
    <br><br>
    
    <label>Razaosocial da Empresa: </label>    
    <input type="text" name="valor" value="<?= $edita->__getRazaosocial() ?>"/>
    <br><br>

    <label>Endereco da Empresa: </label>    
    <input type="number" name="quantidade" value="<?= $edita->__getEndereco() ?>"/>
    <br><br>

    <label>Bairro da Empresa: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getBairro() ?>"/>
    <br><br>
    <label>Cep da Empresa: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getCep() ?>"/>
    <br><br>
    <label>Situação da Empresa: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getSituacao() ?>"/>
    <br><br>

    <input type="submit" value="Alterar " name="btnCadastrar"/>
    
 
</form>



</body>
</html>