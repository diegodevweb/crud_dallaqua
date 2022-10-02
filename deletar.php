<?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Deletar</title>
</head>
<header>
<p>Excluir Clientes</p>
    <picture>
        <img class="logop" src="img/IMG-20210211-WA0059.jpg" alt="">
    </picture>
</header>
<body>
<section id="box3">
<?php
    
    require "deletar-confirma.php";
    if(isset($_POST['sim'])) {
        $id = intval($_GET['id']);
        $sql = "DELETE from clientes WHERE id= $id";
        $sql_query = $banco->query($sql);
        echo sucesso('Registro excluído com sucesso!');
    } 
    echo voltarClientes();
?>
</section>
</body>
<footer>Desenvolvido por Diego© 
    <?php date_default_timezone_set('America/Sao_Paulo');
          $DateAndTime = date('d/m/Y H:i:s', time());
          echo "<br>Último acesso em ".$DateAndTime; ?>
</footer>
</html> 