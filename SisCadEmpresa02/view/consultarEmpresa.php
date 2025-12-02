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
    <h1>Consulta Empresa</h1>
    <table>
        <tr class="consultar">
            <th>CNPJ</th>
            <th>RAZAOSOCIAL</th>
            <th>ENDERECO</th>
            <th>BAIRRO</th>
            <th>CEP</th>
            <th>SITUAÇÃO</th>
            
        </tr>
        <?php    require_once '../model/DTO/empresaDTO.php';
                 require_once '../control/consultarEmpresaControl.php';
        
        $listaEmpresa = $empresaDTO->__getListaEmpresa();
        if ($listaEmpresa != null){
            foreach($listaEmpresa as $empresa) : ?>
                <tr>
                    <td><?= $empresa['cnpj'] ?></td>
                    <br><br>
                    <td><?= $empresa['razaosocial'] ?></td>
                    <td><?= $empresa['endereco'] ?></td>
                    <td><?= $empresa['bairro'] ?></td>
                    <td><?= $empresa['cep'] ?></td>
                    <td><?= $empresa['situacao'] ?></td>    
                    <td><button><a href="../control/excluirEmpresaControl.php?id=<?= $empresa['id']?>"> Excluir </a></button></td>   
                    <td><button><a href="../view/alterarEmpresa.php?id=<?= $empresa['id']?>"> Alterar </a></button></td>      
                </tr>
        <?php endforeach  ; } ?>
    </table>
</body>
</html>