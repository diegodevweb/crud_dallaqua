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
            <div id="selecao"><a href="clientes.php">Clientes</a></div>
        </section>
        <br><br>
        <section id="box2">
            <?php 
                $sql = $banco->query("SELECT id, nome, telefone, cidade FROM clientes ORDER BY nome") ;
                $lista = [];

                if ($sql->rowCount() > 0) {
                    $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
                }
            ?>
            <table border="1" id="table" width="100%;">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CIDADE</th>
                    <th>TELEFONE</th>
                    <th>AÇÕES</th>
                </tr>
                    <?php foreach($lista as $usuario): ?>
                        <tr>
                            <td><?=$usuario['id']; ?></td>
                            <td><?=$usuario['nome']; ?></td>
                            <td><?=$usuario['cidade']; ?></td>
                            <td><?=$usuario['telefone']; ?></td>
                            <td>
                                <a href="incluir.php"><i class='material-icons'>add</i></a>
                                <a href="editar.php?id=<?=$usuario['id']; ?>"><i class='material-icons'>edit</i></a>
                                <a href="deletar.php?id=<?=$usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')"><i class='material-icons'>delete_forever</i></a>
                            </td>
                        </tr>
                <?php endforeach ?>  
            </table>    
        </section>
    </body>
    <footer> 
        Desenvolvido por Diego© 
            <?php   
                date_default_timezone_set('America/Sao_Paulo'); 
                $DateAndTime = date('d/m/Y H:i:s', time());
                echo "<br>Último acesso em ".$DateAndTime; 
            ?>
    </footer>
</html>