
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Clientes</title>
</head>
<header>
<p>Cadastro de Clientes</p>
    <picture>
        <img class="logop" src="img/IMG-20210211-WA0059.jpg" alt="">
    </picture>
</header>
<body>
<?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
?>
<section id="box1">
    <div id="selecao"><a href="index.php">Home</a></div>
    <div id="selecao"><a href="clientes.php">Clientes</a></div> 
</section>
<br><br>
<section id="box2">
    <img class="logo" src="img/logo ambientes pensados.png" alt="logo Dallaqua Decor">
</section>
</body>
<footer>Desenvolvido por Diego©  
    <?php date_default_timezone_set('America/Sao_Paulo');
        $DateAndTime = date('d/m/Y H:i:s', time());
        echo "<br>Último acesso em ".$DateAndTime; ?>
</footer>
</html>