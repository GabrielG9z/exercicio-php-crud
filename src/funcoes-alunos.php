<?php
require_once "conecta.php";

function inserirAlunos(PDO $conexao, string $nome, float $primeiraNota, float $segundaNota, float $media, string $situacao):void {
    $sql ="INSERT INTO alunos (nome, primeira_nota, segunda_nota, media, situacao)  VALUES(:nome, :nota1, :nota2, :media, :situacao )";
    try {
       $consulta = $conexao->prepare($sql);
       $consulta->bindParam(':nome',$nome, PDO::PARAM_STR);
       $consulta->bindParam(':nota1',$primeiraNota, PDO::PARAM_STR);
       $consulta->bindParam(':nota2',$segundaNota, PDO::PARAM_STR);
       $consulta->bindParam(':media',$media, PDO::PARAM_STR);
       $consulta->bindParam(':situacao',$situacao, PDO::PARAM_STR);      
       $consulta->execute();
    } catch (Exception $erro) {
        die("Erro :".$erro->getMessage());
    }
};

function lerAlunos($conexao):array{
    $sql = "SELECT id, nome, primeira_nota AS 'nota1',segunda_nota AS 'nota2', media, situacao FROM alunos";

    try {
       $consulta = $conexao->prepare($sql);
       $consulta->execute();
       $result = $consulta->fetchALL(PDO::FETCH_ASSOC); 
    } catch (Exception $erro) {
        die("Erro :".$erro->getMessage());
    }
return $result;

}

function lerUmAluno(PDO $conexao, int $id):array{
    $sql = "SELECT id, nome, primeira_nota, segunda_nota as 'nota2', media, situacao FROM alunos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        $result = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro :".$erro->getMessage());
    }
    return $result;
}

function atualizarAluno(PDO $conexao, int $id, $nome):void{
    $sql = "UPDATE alunos SET nome = :nome , primeira_nota = nota1, segunda_nota = nota2 WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        $result = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro :".$erro->getMessage());
    }
    return $result;
}