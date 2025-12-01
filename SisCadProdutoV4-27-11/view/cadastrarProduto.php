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
                <li><a href="../index.php">Home</a></li>
                <li><a href="cadastrarProduto.php">Cadastrar</a></li>
                <li><a href="consultarAluno.php">Consultar</a></li>
            </ul>
        </nav>
    </header>
<body>

    <div class="container cadastroProduto">

        <div class="titulo">
            <h1>Cadastro de empresa</h1>
        </div>

        <form method="POST" action="../control/cadastrarProdutoControl.php">

            <div class="cadastro">
                <label>CNPJ: </label>    
                <input type="text" name="cmpj" required/>
            </div>

            <div class="cadastro">
                <label>RAZÃO SOCIAL: </label>    
                <input type="text" name="razao social" required/>
            </div>

            <div class="cadastro">
                <label>ENDEREÇO: </label>    
                <input type="text" name="endereco" required/>
            </div>

            <div class="cadastro">
                <label>BAIRRO: </label>    
                <input type="text" name="bairro" required/>
            </div>

            <div class="cadastro">
                <label>CEP: </label>    
                <input type="text" name="cep" required/>
            </div>
            
              <div class="cadastro">
                <label>SITUACÃO: </label>    
                <input type="text" name="situacao" required/>
            </div>

             

                <h1 class="titulo">Status Empresarial </h1> <br> 
                          
                <div class="radios">
                    <input type="radio" name="status" value="Gestão de Empresas" required/> <label class="titulo">Gestão de Empresas</label> <br>

                    <input type="radio" name="status" value="Recursos Humanos Empresarial" required/> <label class="titulo">Recursos Humanos Empresarial</label> <br>

                    <input type="radio" name="status" value="Finanças e Controladoria" required/> <label class="titulo">Finanças e Controladoria</label> <br>
                </div>
            </div>
            
            <div class="btnCadastrar" id="btnCadastrar">
                <input type="submit" onclick="handlePopup(true)" value="Cadastrar" name="btnCadastrar"/>
                <input type="hidden" name="id"/>
            </div>
        </form>
    </div>

</body>
</html>