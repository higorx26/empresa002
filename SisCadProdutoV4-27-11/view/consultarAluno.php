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
            <li><a href="consultarEmpresa.php">Consultar</a></li>
        </ul>
    </nav>
</header>

<body>

    <div class="containerTable">

        <div class="titulo">
            <h1>Consulta Empresa</h1>
        </div>

        <table>
            <tr>
                <th>CNPJ</th>
                <th>RAZAO SOCIAL</th>
                <th>ENDERECO</th>
                <th>BAIRRO</th>
                <th>CEP</th>
                <th>SITUACAO</th>
                <th>STATUS</th>
                <th>EXCLUIR</th>
                <th>ALTERAR</th>
            </tr>

            <?php
                require_once '../model/DTO/empresaDTO.php';
                require_once '../control/consultarEmpresaControl.php';
            
                $listaEmpresas = $produtoDTO->__getListaEmpresas();

                if ($listaEmpresas != null){
                    foreach ($listaEmpresas as $empresa) :
            ?>
                <tr>
                    <td><?= $empresa['cnpj'] ?></td>
                    <td><?= $empresa['rzao social'] ?></td>
                    <td><?= $empresa['endereco'] ?></td>
                    <td><?= $empresa['bairro'] ?></td>
                    <td><?= $empresa['cep'] ?></td>
                    <td><?= $empresa['siituacao'] ?></td>
                    <td><?= $empresa['status'] ?></td>
                    <td>
                        <button>
                            <a href="../control/excluirProdutoControl.php?matricula=<?= $empresa['matricula'] ?>">Excluir</a>
                        </button>
                    </td>
                    <td>
                        <button>
                            <a href="../view/alterarProduto.php?matricula=<?= $empresa['matricula'] ?>">Alterar</a>
                        </button>
                    </td>
                </tr>
            <?php 
                    endforeach;  
                } 
            ?>
        </table>

    </div>

</body>
</html>
