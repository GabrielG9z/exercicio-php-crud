<?php
if(isset($_POST['inserir'])){
	// Importando as funções e a conexão
	require_once "src/funcoes-alunos.php";

	$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
	$primeiraNota = filter_input(INPUT_POST,'nota1',FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$segundaNota = filter_input(INPUT_POST,'nota2',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
	$media = ($primeiraNota + $segundaNota)/2;

	if($media > 7){
		$situacao = "Aprovado";
	}else{
		$situacao = "Reprovado";
	}

	inserirAlunos($conexao, $nome, $primeiraNota, $segundaNota,$media,$situacao);

	header("location:visualizar.php?status=sucesso");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>
<!-- Todos os campos devem ter a tag name, pois o php só consegue ler os campos com o atributo name, os botões também -->
	<form action="#" method="post">
	    <p><label for="nome">Nome:</label>
	    <input name="nome" type="text" id="nome" required></p>
        
      <p><label for="primeira">Primeira nota:</label>
	    <input name="nota1" type="number" id="primeira" step="0.1" min="0.0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input name="nota2" type="number" id="segunda" step="0.1" min="0.0" max="10" required></p>
	    
      <button type="submit" name="inserir">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>