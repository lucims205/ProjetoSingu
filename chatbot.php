<?php
session_start();
if (isset($_POST['escolha'])) {
  $opc = $_POST['escolha'];
} else {
  $opc = 0;
}
if(isset($_POST['limpar'])) {
  session_destroy();
  header("Location: chatbot.php");
}
function bala($opc){
  if(!isset($_SESSION['respostas'])) {
    $_SESSION['respostas'] = "";
  }
  

  if($opc != 8){
    echo "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada:<br>1 - Desejo saber como funciona a singu!<br> 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?<br> 3 - Desejo me tonar um profissional Singu!<br> 4 - Como usar o aplicativo singu para escolher um profissional? <br> 5 - Como faço para cancelar ou alterar o meu agendamento?<br> 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! <br> 7 - Links para redes sociais, Midias - acordos e parcerias <br> 8 - Finalizar o chat <br></div>";
    switch($opc){
      case 0:
        echo "";
        break;
      case 1:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Desejo saber como funciona a singu!</div>";
        $_SESSION['respostas'] .= "<div class='bot'>
        A Singu é o maior e melhor aplicativo de delivery de beleza do Brasil. Com ele é possível fazer as unhas, massagem, depilação e escova de cabelo sem sair de casa . Você pode baixar o aplicativo, escolher um dos serviços oferecidos, selecionar o local, data e horário e pagar pelo próprio aplicativo. Uma das incríveis profissionais da Singu irá até sua casa para realizar o serviço .
        
        A Singu está presente em 4 cidades: Belo Horizonte - MG, Brasília - DF, Rio de Janeiro - RJ e São Paulo - SP 1. Além disso, a empresa oferece um novo serviço chamado “Singu Now” que permite que você receba em casa uma artista Singu em apenas 40 minutos .
        
        A Singu se preocupa com a segurança de seus clientes e por isso utiliza materiais esterilizados e descartáveis. As profissionais recebem treinamentos constantes e passam por um rígido processo de seleção com testes e análise de documentos</div>";
        $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;

      case 2:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Meu cadastro ainda não foi aprovado, o que devo fazer?</div>";
        
        $_SESSION['respostas'] .= "<div class='bot'> Para você que está tendo dificuldades em realizar o cadastro e assim tornar-se cliente ou prestador da marca. Veja o que pode causar essa dificuldade cadastro Singu.
        Primeiramente, você não pode ter nenhuma irregularidade em seu CPF, caso tenha você terá que regularizar antes de continuar a fazer o cadastro.
        Outra questão, que pode acabar dificultando o cadastro é não ter um comprovante de residência em seu nome.
        Lembrando, a marca permite que você coloque o comprovante de residência no nome de algum parente seu. Mas, tem que ser de 1° grau, tendo no máximo 90 dias de postagem.  
        Caso, não possua o documento conforme as regras de cadastro, você não será aprovada(o).</div>";
        $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";

        
        break;
      case 3:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Desejo me tonar um profissional Singu!</div>";
        $_SESSION['respostas'] .= "<div class='bot'> Para se cadastrar na Singu, você precisa seguir alguns passos1:

        Baixar o aplicativo da Singu no seu celular ou tablet. Você pode encontrar o app na App Store ou na Google Play Store.
        Escolher um dos serviços oferecidos pela Singu. Você pode optar por unhas, massagem, maquiagem, estética, depilação, cabelos ou barbearia.
        Escolher o local, a data e o horário do seu atendimento. Você pode receber uma das profissionais da Singu na sua casa, no seu trabalho ou onde preferir.
        Pagar pelo serviço pelo próprio aplicativo. Você pode usar cartão de crédito ou débito, boleto bancário ou PayPal.
        Pronto! Agora é só aguardar a confirmação do seu agendamento e receber a profissional da Singu no local escolhido.<br>
        <hr>
        Espero ter esclarecido as suas dúvidas. Se precisar de mais alguma informação, estou à disposição. 😉</div>";
        $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;
      case 4:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Como usar o aplicativo singu para escolher um profissional?</div>";
        $_SESSION['respostas'] .= "<div class='bot'>Pelo que eu entendi, você quer saber como usar o aplicativo da Singu para escolher um profissional de beleza e bem-estar, e também quer um link de um vídeo ensinando a usar o app, certo?
        Para usar o aplicativo da Singu, você precisa seguir alguns passos -> Baixar o aplicativo da Singu no seu celular ou tablet. Você pode encontrar o app na App Store ou na Google Play Store.
        Escolher um dos serviços oferecidos pela Singu. Você pode optar por unhas, massagem, maquiagem, estética, depilação, cabelos ou barbearia.
        Escolher o local, a data e o horário do seu atendimento. Você pode receber uma das profissionais da Singu na sua casa, no seu trabalho ou onde preferir.
        Pagar pelo serviço pelo próprio aplicativo. Você pode usar cartão de crédito ou débito, boleto bancário ou PayPal.
        <video  src='videos/video2.mp4' width='100%' height='390' controls>
        Seu navegador não suporta a tag de vídeo.
      </video>
        </div>";
        $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;
      case 5:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Como faço para cancelar ou alterar o meu agendamento?</div>";
            $_SESSION['respostas'] .= "<div class='bot'>Para cancelar ou alterar o seu agendamento na Singu, você precisa seguir alguns passos:

            •	Acessar o aplicativo da Singu no seu celular ou tablet.
            •	Ir na aba “Meus Pedidos” e selecionar o agendamento que você quer cancelar ou alterar.
            •	Clicar no botão “Cancelar” ou “Alterar” e seguir as instruções na tela.Você pode cancelar ou alterar o seu agendamento a qualquer momento, mas existem algumas taxas diferentes para que o profissional não fique no prejuízo. Aqui você encontra as regras da política de cancelamento da Singu1:
            
            •	Cancelamento com mais de 8 horas de antecedência para o horário do agendamento: não haverá cobrança de taxa;
            •	Cancelamento com antecedência entre 8 e 2 horas para o horário do agendamento: será cobrada taxa fixa de R$20,00, se houver artista direcionado para realizar o atendimento. Se não houver artista alocado ao pedido, nada será cobrado;
            •	Cancelamento com antecedência menor que 2 horas para o horário do agendamento: será cobrada taxa no valor integral do pedido, independente de voucher, se houver artista direcionado para realizar o atendimento. Se não houver artista alocado ao pedido, nada será cobrado;
            •	Cliente ausente ou não disponível, com tolerância máxima de 15 minutos: será cobrada taxa no valor integral do serviço, independente de voucher atrelado ao pedido;
            •	No caso de inserir o endereço incorreto no pedido, a artista será liberada do pedido e a cobrança ocorrerá no valor integral do pedido. Não é possível alteração no endereço.
            •	Artista não compareceu ou se atrasou, com tolerância máxima de 15 minutos: não haverá cobrança de taxa pelo cancelamento.Espero ter esclarecido as suas dúvidas. Se precisar de mais alguma informação, estou à disposição. 😉</div>";
            $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;
      case 6:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br>Gostaria de saber um pouco mais dos excelentes profissionais da Singu!</div>";
            $_SESSION['respostas'] .= "<div class='bot'>Os profissionais da Singu são chamados de artistas, pois eles levam arte e beleza para a vida das pessoas. Eles são especializados em diferentes serviços, como unhas, massagem, maquiagem, estética, depilação, cabelos e barbearia1. Eles usam os produtos da Natura nos seus atendimentos, garantindo qualidade e segurança.

            Os artistas da Singu são selecionados por um rígido processo de seleção, que inclui testes e análise de documentos. Eles também recebem treinamentos constantes para se aperfeiçoarem e se atualizarem sobre as tendências do mercado. Eles usam materiais esterilizados e descartáveis para evitar contaminações e garantir a higiene dos clientes.</div>";
            $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;
      case 7:
        $_SESSION['respostas'] .= "<div class='user'>Eu escolhi a opção: {$opc}<br> Quais são os links para redes sociais, Midias - acordos e parcerias?</div>";
            $_SESSION['respostas'] .= "<div class='bot'>A Singu está presente nas principais redes sociais, onde você pode acompanhar as novidades, dicas, promoções e depoimentos sobre os serviços oferecidos pela empresa. Aqui estão os links das redes sociais da Singu:

            Instagram: https://www.instagram.com/singu/
            Facebook: https://www.facebook.com/singuapp/
            YouTube: https://www.youtube.com/channel/UCz0Q2yWm1Za7xX9wO9oY8Zg
            LinkedIn: https://www.linkedin.com/company/singu/
            Twitter: https://twitter.com/singuapp
            Espero ter esclarecido as suas dúvidas. Se precisar de mais alguma informação, estou à disposição. 😉</div>";
            $_SESSION['respostas'] .= "<div class='bot'>Olá, ou o chatbot da Singu =D ! selecione a opção desejada: \n1 - Desejo saber como funciona a singu!\n 2 - Meu cadastro ainda não foi aprovado, o que devo fazer?\n 3 - Desejo me tonar um profissional Singu!\n 4 - Como usar o aplicativo singu para escolher um profissional? \n 5 - Como faço para cancelar ou alterar o meu agendamento?\n 6 - Gostaria de saber um pouco mais dos excelentes profissionais da Singu! \n 7 - Links para redes sociais, Midias - acordos e parcerias \n 8 - Finalizar o chat \n</div>";
        break;
      default:
      echo "<div class='bot'>
      Eu escolhi a opção: {$opc}
      <br><hr>
      Ainda não temos essa opção, mais caso tenha outra duvida fora do nosso conhecimento, nos contate por gmail
      singuvascãode98@hotmail.com😉</div>";
        break;
    
  }
  echo nl2br($_SESSION['respostas']);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "index.css" rel = "stylesheet">
</head>
<body>
<header>
        <h1 class = "logo">Singu</h1>
        <nav>
            <ul class = "menu2">
                <li><a href="index.php">Voltar ao site</a></li>
            </ul>
        </nav>
    </header>
  <div class="container">
<main>
<h2><?=bala($opc);?></h2>
</main>
<div id="rodapezin">
<form action="chatbot.php" method="post">
            <label id=text>
            <textarea cols="160" rows="2" name="escolha"></textarea>
             <button type="submit">Enviar</button>
             <button type="submit" name="limpar">Limpar</button>
            </label>
        </form>
</div>
</div>
<script>
</script>

</body>
</html>
