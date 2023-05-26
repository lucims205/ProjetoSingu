<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <form action="" method="post">
        <h1>Cadastro</h1>

        <div id="nomepr">
        <label>Nome Completo:
            <input type="text" name="nome">
        </label>
        </div>

        <div id="emailpr">
        <label>E-mail Principal:
            <input type="email" name="emailprincipal">
        </label>
        </div>

        <div id="cpfpr">
        <label>CPF:
            <input type="number" name="cpf">
        </label>
        </div>

        <div id="ceppr">
        <label>CEP:
            <input type="number" name="cep">
        </label>
        </div>

        <div id="localpr">
        <label>Endereço Completo:
            <input type="textarea" name="logradouro">
        </label>
        </div>

        <button> Enviar </button>
        
    </form>

</body>
</html>