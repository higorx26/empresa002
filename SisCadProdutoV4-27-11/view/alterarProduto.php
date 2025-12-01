<?php
    //AlterarProduto checked!!
    include_once '../model/DAO/ProdutoDAO.php';
    include_once '../model/DAO/conexao.php';
    
    

    $produtoDAO = new ProdutoDAO($conexao);
    $edita = $produtoDAO->consultarMatricula($_GET['matricula']);
    //var_dump($edita);
    //echo $edita['nome'];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="view/cadastrarProduto.php">Cadastrar</a></li>
                <li><a href="view/consultarAluno.php">Consultar</a></li>
            </ul>
        </nav>
</header>
<body>

    <div class="container-alterar">

        <form method="POST" action="../control/alterarProdutoControl.php">

            <div class="titulo-alterar">
                <h1>Alterar Aluno</h1>
            </div>
            
            <input type="hidden" name="matriculaAlterar" value="<?= $_GET['matricula']; ?>" />
            
            <label>Nome do Aluno: </label>    
            <input type="text" name="nome" value="<?= $edita->__getNome() ?>"required/>
            <br><br>
            
            <label>Telefone do Aluno: </label>    
            <input type="text" name="telefone" value="<?= $edita->__getTelefone() ?>"required/>
            <br><br>

            <label>Endereço do Aluno: </label>    
            <input type="text" name="endereco" value="<?= $edita->__getEndereco() ?>"required/>
            <br><br>

            <label>Email do Aluno: </label>    
            <input type="text" name="email" value="<?= $edita->__getEmail() ?>"required/>
            <br><br>

            <div class="radio-box">

    <h1>Status Empresarial </h1> <br> 

        <div class="radios">
        
            <?php $cursoAtual = $edita->__getCurso(); // Pega o curso do DTO uma vez ?>

            <input type="radio" 
                name="curso" 
                value="Gestão de Empresas" 
                <?= ($cursoAtual == 'Gestão de Empresas') ? 'checked' : ''; ?>
            required/> 
            <label>Gestão de Empresas</label> 
            <br>

            <input type="radio" 
                name="curso" 
                value="Recursos Humanos Empresarial"
                <?= ($cursoAtual == 'Recursos Humanos Empresarial') ? 'checked' : ''; ?>
            required/> 
            <label>Recursos Humanos Empresarial</label> 
            <br>

            <input type="radio" 
                name="curso" 
                value="Finanças e Controladoria" 
                <?= ($cursoAtual == 'Finanças e Controladoria') ? 'checked' : ''; ?>
            required/> 
            <label>Finanças e Controladoria</label> 
            <br>

            <div class="btnCadastrar">
                <input type="submit" value="Alterar " name="btnCadastrar"/>
            </div>
        </div>
    </div>
</div>    
 
</form>



</body>
</html>