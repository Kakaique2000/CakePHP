<?php

require_once './dao/estoque_dao.php';

$dadosJson = file_get_contents('php://input'); # esta e a forma que vamos pegar o Json na requisição

// Decodifica o JSON
$dadosArray = json_decode($dadosJson, true);

// Verifica se a decodificação foi bem-sucedida
if ($dadosArray === null) {
    // Se a decodificação falhou, retorna uma resposta de erro
    http_response_code(400);
    echo json_encode(["mensagem" => "Erro na decodificação do JSON."]);
    exit();
}
// Cria uma instância da classe EstoqueDAO com os dados do JSON
$estoqueDAO = EstoqueDAO::fromJson($dadosArray);

try {
    // Chama o método create para inserir no banco de dados
    $estoqueDAO->create();

    // Retorna uma resposta de sucesso
    echo json_encode(["mensagem" => "Registro de estoque criado com sucesso."]);
} catch (Exception $e) {
    // Se houver um erro, retorna uma resposta de erro
    http_response_code(500);
    echo json_encode(["mensagem" => $e->getMessage()]);
}
?>