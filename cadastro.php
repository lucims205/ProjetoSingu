<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="layout2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Login</title>
</head>
<body>

    <form action="retornacadastro.php" method="get">

        <header>
            <h1>Cadastro</h1>
          
            <br><br>
          
        </header>

    <section>
        <div id="nomepr">
        <label><h4>Nome Completo:</h4>
            <input type="text" placeholder="Digite seu nome completo" name="nome" required>
        </label>
        </div>

        <div id="emailpr">
        <label><h4>E-Mail:</h4>
            <input type="email" placeholder="Digite seu E-Mail" name="email" required>
        </label>
        </div>

        <div id="cpfpr">
        <label><h4>CPF:</h4>
            <input type="number" placeholder="Digite seu CPF" name="cpf" required>
        </label>
        </div>

        <div id="ceppr">
        <label><h4>CEP:</h4>
            <input type="text" placeholder="Digite seu CEP" name="cep" required>
        </label>
        </div>

        <div id="enderecopr">
        <label><h4>Endereço Completo:</h4>
            <input type="text" placeholder="Digite seu Endereço" name="endereco" required></textarea>
        </label>
        </div>

        <div id="telefonepr">
        <label><h4>Telefone:</h4>
            <input type="number" placeholder="Digite seu Telefone" name="telefone" required>
        </label>
        </div>

        <div id="cidadepr">
        <label><h4>Cidade:</h4>
            <input type="text" placeholder="Digite sua Cidade" name="cidade" require>
        </label>
        </div>
      
      <br><br>
      
      <div style="margin-left:5px; text-align:justify; font:25px Haettenschweiler;">
        <label>Mensagem:</label>
        <textarea rows="4" cols="50" placeholder="Digite sua mensagem aqui" name="mensagemdes"></textarea>
      </div>
      
<br>
      
        <div>
        <input type="submit" name="enviar" class="bt1">
      </div>
      
    </section>
  <br>
        <h5>Ou</h5>
  
<br>
  
  <h3>Se você já obtém uma conta ativada, faça login pelo Google.</h3>

        <a href="https://accounts.google.com/Login?hl=pt-BR">Clique aqui para Login</a>
</form>
  
</body>
</html>