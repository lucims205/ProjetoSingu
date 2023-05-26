<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Dados</title>
</head>
<body>

    <h1>Seja Bem Vindo(a)</h1>

    <br> <br>

    <?php
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $cpf = $_GET["cpf"];
        $cep = $_GET["cep"];
        $endereco = $_GET["endereco"];
        $telefone = $_GET["telefone"];
        $cidade = $_GET["cidade"];
        $mensagemdes = $_GET["mensagemdes"];

        echo"<h2>Olá $nome</h2>";

        echo"<h3><br><br>Nome Completo:</h3> - $nome";
        echo"<h3>Email:</h3> - $email";
        echo"<h3>CPF:</h3> - $cpf";
        echo"<h3>CEP:</h3> - $cep";
        echo"<h3>Endereço:</h3> - $endereco";
        echo"<h3>Telefone:</h3> - $telefone";
        echo"<h3>Cidade:</h3> - $cidade";
        echo"<h3>Mensagem:</h3> - $mensagemdes";

    ?>

</body>
</html>