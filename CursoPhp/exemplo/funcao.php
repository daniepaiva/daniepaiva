<?php

function minhaFuncaoPHP($param1, $param2){
    return ($param1+$param2);
}

$dados = json_decode(file_get_contents('php://input'), true);

$resposta = minhaFuncaoPHP($dados['campo1'], $dados['campo2']);

echo json_encode($resposta);

?>