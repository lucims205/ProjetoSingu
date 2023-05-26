<?php

                    require "dados.php";
 
?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singu - Líder em Serviço de Delivery</title>
    <link href = "index.css" rel = "stylesheet">
</head>
<body>
    <div class = "espaco"></div>
    <header>
        <h1 class = "logo">Singu</h1>
        <nav>
            <ul class = "menu1">
                <li><a href="#ComoFunciona">Como Funciona</a></li>
                <li><a href="#Servicos">Serviços</a></li>
                <li><a href="#Contatos">Contate-nos</a></li>

            </ul>
            <ul class = "menu2">
                <li><a href="cadastro.php">Trabalhe Conosco</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
        <img src = "Imagens/massagem.jpg" alt = "massagista" id = "massagem">
        </div>

        <article>
            <a href="teste.php"><img src="Imagens/flutu.jpeg"></a>
            </article>

        <div class = "servicos">

            <div id = "singufunciona">
                <h2><a name = "ComoFunciona">Como a Singu funciona?</a></h2>
            </div>

            <div class = "func">
                <h3>
                    <a href="chat-bot.php"><img src="imagens/flutu.png"></a>
                </h3>
                <div class = "funcionamento">  
                    <a href = "https://play.google.com/store/apps/details?id=br.com.singu&hl=pt_BR&gl=US" target = "blank"> 
                    <img src = "Imagens/playstore.png" alt="playstore" class = "outros"> 
                    </a>
                    <p>Baixe o app e escolha um dos nossos serviços.</p>
                </div>
                <div class = "funcionamento">
                    <a href = "https://play.google.com/store/apps/details?id=br.com.singu&hl=pt_BR&gl=US" target = "blank"> 
                    <img src = "Imagens/relogio.png" alt="relogio" class = "outros"> 
                    </a>
                    <p>Escolha local, data, horário e pague pelo app.</p>
                </div>
                <div class = "funcionamento"> 
                    <a href = "https://play.google.com/store/apps/details?id=br.com.singu&hl=pt_BR&gl=US" target = "blank"> 
                    <img src = "Imagens/profissional.png" alt="relogio" class = "outros"> 
                    </a>
                    <p>Receba uma das nossas incríveis profissionais na sua casa.</p>
                </div>

            </div>
        </div>

        <div class = "servicos">
            <div class = "prom">
                <h2><a name = "Servicos">Nossos Serviços</a></h2>
            </div>
            <div class = "listaservicos">

                <!--parte de manu-->
                <div class="servicos-capa">
                
                    <?php
                        foreach($servicos as $i => $serv){
                    ?>
            
                    <div class="item-servicos">
                        <a href="servicos-detalhe.php?i=<?=$i?>">
                            <img src="<?=$serv['foto']?> " alt="<?=$serv['nome']?>" class = "imgservic">
                            
                        </a>
                    <h3>
                        <a href="servicos-detalhe.php?i=<?=$i?>">
                            <?=$serv["nome"]?>
                        </a>
                    </h3>
                        
                    </div>
            
                    <?php  } ?>
                        
                    
                </div>
                <!--fim parte de manu-->
            </div>
        </div>
        <div class = "servicos">
            <div class = "prom">
                <h2><a name = "Contatos">Contatos</a></h2>
            </div>
            <div class = "contatos">
                <div class = "amostra">
                    <a href = "https://www.instagram.com/singu/" target = "blank"> 
                    <img src = "Imagens/inst.png" alt="instagram" class = "image"
                    height="190" width="190"> 
                    </a>
                    <p>Instagram</p>
                </div>
                <div class = "amostra">
                    <a href = "https://twitter.com/singubr" target = "blank"> 
                        <img src = "Imagens/twit.jpg" alt="twitter" class = "image"
                        height="190" width="190"> 
                    </a>
                    <p>Twitter</p>
                </div>
                <div class = "amostra">
                    <a href = "https://play.google.com/store/apps/details?id=br.com.singu&hl=pt_BR&gl=US&pli=1" target = "blank"> 
                        <img src = "Imagens/singu.png" alt="app" class = "image"
                        height="190" width="190"> 
                    </a>
                    <p>Singu App</p>
                </div>
            </div>
        </div>
    </main>
    <footer class = "rodape">
        <div class = "textofinal">
        <p>Baixe nosso Aplicativo</p>
        <br>
        </div>
        <p>CNPJ: 22.150.358/0001-33</p>
        <p><a href="#Contatos">Trabalhe Conosco</a></p>
    </footer>
</body>
</html>
