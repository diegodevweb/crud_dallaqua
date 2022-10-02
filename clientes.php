<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />

    <title>Cadastro de Clientes</title>
</head>
<header>
<p>Clientes</p>
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
        <div id="selecao"><a href="clientes.php" style="">Clientes</a></div>
        <div id="selecao"><a href="incluir.php">Novo Cliente</a></div>
    </section>
    <br><br>

    <section id="box2">
      <?php 
            $q = "select id, nome, telefone, cidade from clientes order by nome";
            $busca = $banco->query("$q"); ?>
            <?php if (!$busca) { ?>
                <p>Infelizmente a busca deu errado.</p>
            <?php } else { ?> <?php } ?>
            <?php
            while ($r = $busca->fetch_object()) { ?>
                
                    <p>Nome: <?php echo $r->nome ?>|  Telefone: <?php echo $r->telefone ?> |  Cidade: 
                     <?php echo $r->cidade ?>
                     <a href="editar.php?id=<?php echo $r->id ?>"><i class="material-symbols-outlined">Edit</i></a>
                     <a href="deletar.php?id=<?php echo $r->id ?>"><i class="material-icons">delete_forever</i></a><?php } ?> 
                </p>           
    </section>

    
</body>
<footer>Desenvolvido por Diego© 
    <?php date_default_timezone_set('America/Sao_Paulo');
          $DateAndTime = date('d/m/Y H:i:s', time());
          echo "<br>Último acesso em ".$DateAndTime; ?>
</footer>

</html>