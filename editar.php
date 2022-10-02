<!DOCTYPE html>
<html lang="pt-br">
<?php
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
?>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Editar</title>
</head>
<header>
    <p>Clientes</p>
    <picture>
        <img class="logop" src="img/IMG-20210211-WA0059.jpg" alt="">
    </picture>
</header>
<body style="background-color: #E5ECFB">
<section id="box1">
    <div id="selecao"><a class="link"  href="index.php"  style="text-decoration:none;">Home</a></div>
    <div id="selecao"><a class="link" href="clientes.php" style="text-decoration:none;">Clientes</a></div>
</section>
<br><br>
<section id="box4">
    <table>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <p class="card-text"><?php 
            require_once "includes/banco.php";
            require_once "includes/funcoes.php";
            
            if(!isset($_POST['nome'])) {
                require "editar-confirma.php";
            } else {
                
                $nome = $_POST['nome'] ?? null;
                $cidade = $_POST['cidade'] ?? null;
                $tel = $_POST['tel'] ?? null;
                $id = intval($_GET['id']);
    
                $sql = "UPDATE clientes SET nome = '$nome', cidade = '$cidade', telefone = '$tel' WHERE id='$id'"; 
                if($banco->query($sql)) {
                    echo sucesso('Alteração feita com sucesso!');
                    echo voltarClientes();
                } else {
                    echo erro('Erro ao atualizar cadastro.');
                    echo "$banco->error";
                }
            } voltarClientes();
            ?>
            </p>
    </table>
</section>
</body>
<footer>Desenvolvido por Diego© 
    <?php date_default_timezone_set('America/Sao_Paulo');
          $DateAndTime = date('d/m/Y H:i:s', time());
          echo "<br>Último acesso em ".$DateAndTime; ?>
</footer>
</html>

