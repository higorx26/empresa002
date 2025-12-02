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

<h1>Cadastrar Empresa</h1>

<form method="POST" action="../control/cadastrarEmpresaControl.php">
<label>CNPJ: </label>    
<input type="number" name="cnpj"/>
    <br><br>
    
    <label>RAZAO SOCIAL: </label>    
    <input type="text" name="razaosocial"/>
    <br><br>

    <label>ENDEREÇO: </label>    
    <input type="text" name="quantidade"/>
    <br><br>

    <label>BAIRRO: </label>    
    <input type="text" name="bairro"/>
    <br><br>

    <label>CEP: </label>    
    <input type="number" name="cep"/>
    <br><br>

    <label>SITUAÇAO: </label>
    <input type="radio">  
    <label for="">ativo</label>  
    <input type="radio">
    <label for="">inativo</label>
    <input type="radio">
    <label for="">pendente</label>
    <br><br>
    <input type="submit" value="Cadastrar" name="btnCadastrar"/>
    <input type="hidden" name="id"/>
</form>



</body>
</html>