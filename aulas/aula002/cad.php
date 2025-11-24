<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php 
        $nome = $_GET["nome"] ??"sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo"Seja bem vindo <strong> $nome $sobrenome </strong> ao meu site";
        ?>
        <p>
            <a href="javascript:history.go(-1)">voltar!</a>
    </p>
    </section>
</body>
</html>