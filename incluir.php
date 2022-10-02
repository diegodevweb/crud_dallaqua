
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Novo Cliente</title>
</head>
<header>
    <p>Novo Cliente</p>
    <picture>
        <img class="logop" src="img/IMG-20210211-WA0059.jpg" alt="">
    </picture>
</header>
<body>
<section id="box4">
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <p class="card-text"><?php 
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    
        if(!isset($_POST['nome'])) {
            require "clientes-cadastro.php";
        } else {
            $nome = $_POST['nome'] ?? null;
            $cidade = $_POST['cidade'] ?? null;
            $tel = $_POST['tel'] ?? null;

            $sql = "INSERT INTO clientes (nome, cidade, telefone) VALUES ('$nome', '$cidade', '$tel')"; 
            if($banco->query($sql)) {
                echo sucesso('Cliente cadastrado com sucesso!');
                echo voltarClientes();
            } else {
                echo erro('Erro ao cadastrar novo cliente.');
                echo "$banco->error";
            }
        } voltarClientes();
?> 
</p> 
    </div>
</div>
</section>
</body>
<footer>Desenvolvido por Diego© 
    <?php date_default_timezone_set('America/Sao_Paulo');
        $DateAndTime = date('d/m/Y H:i:s', time());
        echo "<br>Último acesso em ".$DateAndTime; ?>  
</footer>
</html>





