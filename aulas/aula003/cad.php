<?php
require_once"conexao.php";
 $nome = $_GET["nome"] ??"sem nome";
 $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

 if($nome && $sobrenome){
       $stmt =  $mysqli -> prepare ("INSERT INTO usuario (nome, sobrenome)  VALUES (?,?)");

       $stmt -> bind_param("ss", $nome, $sobrenome);
       if($stmt->execute()){
        $mensagem = "enviado com sucesso";
       } else{
        $mensagem = "Falha ao enviar";
       }
       $stmt->close();
    
 } else{
    $mensagem = "dado inválido";
 }

?>

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
        echo $mensagem
        ?>
        <p>
            <a href="javascript:history.go(-1)">voltar!</a>
    </p>
    </section>
</body>
</html>