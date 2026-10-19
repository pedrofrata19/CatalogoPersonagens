<?php

require_once __DIR__ . "/controllers/PersonagemController.php";

$controller = new PersonagemController();

$acao = $_GET["acao"] ?? "listar";

$mensagem = "";

if ($acao == "cadastrar") {

    $mensagem = $controller->cadastrar();

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        require __DIR__ . "/views/cadastrar.php";
    } else {
        require __DIR__ . "/views/cadastrar.php";
    }

} else {

    $personagens = $controller->listar();

    require __DIR__ . "/views/listar.php";

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Personagens</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
    
</body>
</html>