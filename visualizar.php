<?php require_once "src/funcoes-alunos.php";
$listaDeAlunos = lerAlunos($conexao);
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
<?php

foreach($listaDeAlunos as $aluno) {?>
<table>
    <tr>
        <td>Nome: <?=$aluno['nome'];?></td>
        
    </tr>
    <tr>
        <td>Primeira Nota: <?=$aluno['nota1'];?></td>
    </tr>
    <tr>
        <td>Segunda Nota: <?=$aluno['nota2'];?></td>
    </tr>
    <tr>
        <td>Média: <?=$aluno['media'];?></td>
    </tr>
    <tr>
        <td>Situação: <?=$aluno['situacao'];?></td>
    </tr>

</table>
<a href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a>
<a href="excluir.php?id=<?=$aluno['id']?>">Excluir</a>
<?php
};?>

    <p><a href="inserir.php">Inserir novo aluno</a></p>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>