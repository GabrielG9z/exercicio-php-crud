
<?php
$server = "localhost";
$user = "webmaio_genovez";
$password = "Gabriel77junho";
$database = "webmaio_genvoez";

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
