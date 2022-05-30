<?php
require_once "conecta.php";

function verAlunos($conexao):array{
    $sql ="SELECT id, nome FROM alunos";
    try {
       $consulta = $conexao->prepare($sql);
       
       $consulta->execute();
    $resultado = $consulta->fetchALL(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro :".$erro->getMessage());
    }
}
return $resultado;