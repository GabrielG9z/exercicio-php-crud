
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "crud_escola_gabriel_genovez";

try {
    // Criando a conexão com o MySQL (API de conexão)
    $conexao = new PDO(
        "mysql:host=$server; dbname=$database; charset=utf8",$user,$password
    );
    // Habilitando a verificação de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $erro) {
    die("Erro: ".$erro->getMessage());
}
?>
