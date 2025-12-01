<?php
// O arquivo de conexão DEVE APENAS estabelecer a conexão ou lançar/capturar o erro.
// Ele NÃO deve redirecionar o usuário.
$dsn = "mysql:host=localhost;dbname=turmam";
$usuario = "root";
$senha = "";
$conexao = null; // Inicializa a variável para garantir que ela exista.

try{
    $conexao = new PDO($dsn , $usuario, $senha);
    // Configura o PDO para lançar exceções em caso de erros SQL
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $erro){
    // Se a conexão falhar, apenas exibe a mensagem de erro (durante o desenvolvimento)
    // ou trate o erro de forma silenciosa para o usuário final.
    // **NÃO REDIRECIONE AQUI.**
    die("Erro de Conexão com o Banco de Dados: " . $erro->getMessage());
}
// O arquivo termina aqui. A variável $conexao agora pode ser usada.
?>