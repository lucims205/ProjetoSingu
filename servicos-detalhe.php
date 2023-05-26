<?php
require "dados.php";

if(!isset ($_GET["i"])){
    header("location: index.php");
    die;
}



$indice = $_GET["i"];
//Se o indice passado pelo usuario existir no meu array de funcionamento.
if(isset($servicos[$indice])){
    $s = $servicos[$indice];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Serviços</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class = "espaco"></div>
    <header>
        <h1 class = "logo">Singu</h1>
        <nav>
            <ul class = "menu1">
                <li><a href="index.php">Como Funciona</a></li>
                <li><a href="index.php">Serviços</a></li>
                <li><a href="index.php">Contate-nos</a></li>
            </ul>
            <ul class = "menu2">
                <li><a href="">Trabalhe Conosco</a></li>
            </ul>
        </nav>
    </header>
    <main>
	<div class = "detail">
		
		
		

            <?php
                if(isset($s)){
            ?>
			<img src="<?=$s ["foto"]?>" alt="<?=$s["nome"]?>">

        <div class = "detail2">

			<h3><?=$s["nome"]?></h3>
            <br>
			<p><?=$s["descricao"]?> </p>
            <br>
			<a href="index.php" class="link">Voltar</a>
        </div>
            <?php
                }else{
                    echo"<h3> Serviços não encontrados </h3>";
                }
            ?>

			
		
	</div>
</main>
    <footer class = "rodape">
        <div class = "textofinal">
        <p>Baixe nosso Aplicativo</p>
        <br>
        </div>
        <p>CNPJ: 22.150.358/0001-33</p>
    </footer>
</body>
</html>